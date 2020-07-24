/**
 * Runs a search on the API given, using the data on the form.
 * @constructor
 */

function ProductSearch()
{
    this.api = "";

    this.product_url = "";

    this.criteria = {
        text:"", categories:[], min_price:0, max_price:0, sortBy:0
    };

    this.container = $("#search-results");

    this.slider = {};

    this.setHandlers();

    this.reload();
}

ProductSearch.prototype.setHandlers = function()
{
    var _self = this;

    $(document).on('click',".add-tax-filter",function(){
        var is_checked = $(this).is(":checked");
        var category_id = $(this).attr("data-id");
        if( is_checked ){
            _self.addCategory(category_id);
        }else{
            _self.removeCategory(category_id);
        }
    });

    this.slider = $(".slider-input").jRange({
        from: 0,
        to: 1000,
        step: 10,
        format: '$%s',
        width: 400,
        showLabels: true,
        isRange : true,
        onstatechange: function(val){
            var values = val.split(",");
            var min = values[0];
            var max = values[1];
            _self.criteria.min_price = min;
            _self.criteria.max_price = max;
        }
    });

    $(document).on("click","#trigger-other-update",function(e){
        e.preventDefault();
        var sort = $("#sform-sort").val();
        var text = $("#sform-keyword").val();
        _self.criteria.text = text;
        _self.criteria.sortBy = sort;
        _self.triggerSearch();
    });
};

ProductSearch.prototype.addCategory = function(category)
{
    if( this.criteria.categories.indexOf(category) == -1 ){
        this.criteria.categories.push(category);
        // this.triggerSearch();
    }
};

ProductSearch.prototype.removeCategory = function(category)
{
    if( this.criteria.categories.indexOf(category) > -1 ){
        var index = this.criteria.categories.indexOf(category);
        if (index > -1) {
            this.criteria.categories.splice(index, 1);
        }
        // this.triggerSearch();
    }
};

ProductSearch.prototype.setApiUrl = function($url)
{
    if(typeof $url != "undefined"){
        this.api = $url;
    }
};

ProductSearch.prototype.setProductUrl = function($url)
{
    if(typeof $url != "undefined"){
        this.product_url = $url;
    }
};

ProductSearch.prototype.triggerSearch = function()
{
    var _self = this;
    var $product_template = this.product_url.substring(0, this.product_url.length - 1);

    this.search(function(resp){
        if(typeof resp.products != "undefined"){
            _self.container.html("");
            var list = [];
            for( product in resp.products ){
                if( resp.products.hasOwnProperty(product) ){
                    var $product = resp.products[product];
                    var $product_link = $product_template + $product.link;
                    var html =
                        '<li data-id="'+$product.link+'">'+
                            '<a href="'+$product_link+'">'+
                            '<img src="'+$product.image+'">'+
                            '<label>'+$product.name+'</label>'+
                        '</a></li>';
                    list.push(html);
                }
            }
            _self.container.html( list.join("") );

            if( resp.count == 0 ){
                _self.container.html("No products found!");
            }

            window.searchInstance.reload();
        }
    });
};

ProductSearch.prototype.reload = function()
{
    $("#search-results").imagesLoaded(function(){

        console.info("IMAGES READY...");
        $(window.msry).masonry('destroy');
        window.msry = $("#search-results").masonry({
            // options
            itemSelector: 'li',
            columnWidth: 20,
            gutter:0,
            percentPosition: true
        });

        $(window.msry).masonry('layout');
    });
};

ProductSearch.prototype.search = function(callback)
{
    $.ajax({
        url:this.api,
        data: { "criteria":this.criteria },
        type:'POST',
        beforeSend:function(){
            $("#main-loading-gif").show();
        }
    }).done(function(response){
        $("#main-loading-gif").hide();
        if(typeof callback == "function"){
            callback(response);
        }
    });
};