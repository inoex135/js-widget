<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
    "http://www.w3.org/TR/html4/strict.dtd"
    >
<html lang="en">
<head>
    <title>Product Widget Example</title>
    <?php echo $html->css('thumb')?>
    <?php echo $html->script('jquery');?>
</head>
<body>
<div class="pw-box">
    <a class="prev" href="#prev">prev</a>
    <div class="pw-body">
        <div class="pw-inner" style='display:none'>
            <h2 id='company_name'>American Book Store</h2>
            <div class="pw-content">
                <div class="col1" id='thumbnails'>
                    <img src="img/book_40.jpg" title="" />
                    <img src="img/book_40.jpg" title="" />
                    <img src="img/book_40.jpg" title="" />
                    <img src="img/book_40.jpg" title="" />                
                </div>
                <div class="col2">
                    <div class="inner">
                        <a target='__blank' id='url' href='#'><img width='125px' id='thumb' src="img/book_125.png" title="" /></a>
                        <h3 id='product_name'>Web Widget For Dummies</h3>
                        <div id='price' class="price">$99.99</div>
                    </div>
                </div>
                <div class="col3">
                    <div class="r">
                        <h4>Ron TJ</h4>
                        <div class="star star-1">2 star</div>
                    </div>
                    <div class="r">
                        <h4>David Naldo</h4>
                        <div class="star star-2">5 star</div>
                    </div>
                    <div class="r">
                        <h4>Fabiano GH</h4>
                        <div class="star star-4">4 star</div>
                    </div>                
                </div>
            </div>
        </div>
    </div>
    <a class="next" href="#next">next</a>    
</div>
<script type='text/javascript'>
    var currentid = 0;
    function changeThumb(url){
        $('#thumb').attr('src',url);
    }
    function changeContent(id,order){
        $.ajax({
            url:'<?php echo $html->url('/widget/json_product/')?>' + id + '/' + order,
            success:function(data){
                var product = eval("(" + data + ")");
                currentid = product.id;
                $('#company_name').html(product.company_name);
                $('#product_name').html(product.product_name);
                $('#thumb').attr("src",'<?php echo $html->url('/img')?>/' + product.files[0]);
                $('#url').attr("href",product.url);
                $('#price').html('$' + product.price);
                $('#description').html(product.description);
                thumbnails = '';
                for($i=0;$i<product.files.length;$i++){
                    thumbnails += '<img onmouseover="changeThumb(\'<?php echo $html->url('/img')?>/' + product.files[$i] + '\')" width="40px" id="thumb' + $i + '" src="<?php echo $html->url('/img')?>/' + product.files[$i] + '"/>';
                }
                $('#thumbnails').html(thumbnails);
                $('.pw-inner').show();
            }
        });
    }
   $(document).ready(changeContent(0,'ASC'));
    $('.next').click(function(){
        //$('.pw-inner').toggle('slide');
        changeContent(parseInt(currentid) + 1,'ASC');
    });
    $('.prev').click(function(){
        changeContent(parseInt(currentid) - 1,'DESC');
    });
</script>
</body>
</html>
