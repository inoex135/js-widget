<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
    "http://www.w3.org/TR/html4/strict.dtd"
    >
<html lang="en">
<head>
    <title>Product Widget Example</title>
    <style type="text/css">
    .pw-box{
        font-size:12px;
        font-family: Helvetica, Arial, serif;
        width:300px;
        height:250px;
        overflow:hidden;
    }
    .pw-box *{
        margin:0;padding:0;
    }
    .pw-box .prev, .pw-box .next{
        display:block;
        float:left;
        width:16px;
        height:250px;
        text-indent: -3000px;
        background: transparent url('') no-repeat scroll 0 50%;
    }
    .pw-box .prev{background-image:url('img/prev.png');}
    .pw-box .next{background-image:url('img/next.png');}
    
    .pw-body{
        float:left;
        background-color:#fcffeb;
        border:1px solid #bfd8e3;
        width:250px;
    }
    .pw-inner{
        width:253px;
        height:248px;
    }
    .pw-content .col1{
        float:left;
        width:55px;
        overflow:hidden;
    }
    .pw-content .col2{
        float:left;
        width:138px;
        overflow:hidden;
    }
    .pw-content .col2 .inner{
        padding:0 5px;
    }
    .pw-content .col3{
        float:left;
        width:60px; 
        overflow:hidden;
    }
    .pw-box h2{
        padding:5px;
        font-size:1.3em;
        margin-bottom:10px;
    }
    .pw-box .col1 img{
        display:block;
        width:40px;
        height:40px;
        margin: 0 auto 10px;
    }
    .pw-box .col2 img{
        border:1px solid #bfd8e3;
        margin-bottom:5px;
    }
    .pw-box .price{
        color:#438ec8;
        font-size:.9em;
    }
    .pw-box h3{
        margin-bottom:5px;
        line-height:13px;
        max-height:40px;
        overflow:hidden;
    }
    .pw-box .r h4{
        font-size:.9em;
        font-weight:normal;
        padding:0 5px 0 0;
    }
    .pw-box .r .star{
        background:transparent url("img/star.png") no-repeat scroll 0 0;
        text-indent:-2000px;
    }
    .pw-box .r .star-1{width:11px;}
    .pw-box .r .star-2{width:21px;}
    .pw-box .r .star-3{width:31px;}
    .pw-box .r .star-4{width:41px;}
    
    .pw-box .r span{
        display:block;
        float:left;
    }    
    .pw-box .r span.name{
        margin-right:10px;
    }
    .pw-box .cover{
        width:145px;
        height:150px;
        float:left;
        padding: 0 5px;
    }
    .pw-box .cover img{
        margin:0 auto;
        border:1px solid #bfd8e3;        
    }
    .pw-box .info{
        width:85px;
        float:left;
    }
    .pw-box .desc{
        padding:5px;
        font-size:0.9em;
    }
    .pw-box .desc p{
        color:#606060;
        height:26px;
        overflow:hidden;
    }
    </style>
</head>
<body>
<div class="pw-box">
    <a class="prev" href="#prev">prev</a>
    <div class="pw-body">
        <div class="pw-inner">
            <h2>American Book Store</h2>
            <div class="pw-content">
                <div class="col1">
                    <img src="img/book_40.jpg" title="" />
                    <img src="img/book_40.jpg" title="" />
                    <img src="img/book_40.jpg" title="" />
                    <img src="img/book_40.jpg" title="" />                
                </div>
                <div class="col2">
                    <div class="inner">
                        <img src="img/book_125.png" title="" />
                        <h3>Web Widget For Dummies</h3>
                        <div class="price">$99.99</div>
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
</body>
</html>
