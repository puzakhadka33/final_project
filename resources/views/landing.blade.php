@extends('layouts.landmaster')
@section('content')
<style>
    .landing-pic {
        border: 2px solid;
        height: 550px;

    }

    .landing-pic img {
        height: 550px;
        width: 100%;
    }

    /* card styling */
    body {
        background: #eee
    }

    .icon-container {
        border-radius: 7px
    }

    .stars i {
        margin-right: 2px;
        color: red;
        font-size: 13px
    }

    .rating-number {
        font-size: 20px;
        font-weight: 700;
        margin-bottom: 2px
    }

    .number-ratings {
        font-size: 12px
    }

    .listing-title {
        margin-bottom: -7px
    }

    .progress-bar {
        background: green
    }

    .progress {
        height: 16px
    }

    .tags span {
        margin-right: 9px;
        border: 1px solid green;
        padding-right: 9px;
        padding-left: 9px;
        padding-top: 2px;
        padding-bottom: 4px;
        border-radius: 7px;
        background-color: green;
        color: #fff
    }

    body{
    background-color: #f4f7f6;
    margin-top:20px;
}
.card {
    background: #fff;
    transition: .5s;
    border: 0;
    margin-bottom: 30px;
    border-radius: .55rem;
    position: relative;
    width: 100%;
    box-shadow: 0 1px 2px 0 rgb(0 0 0 / 10%);
}
.card .body {
    color: #444;
    padding: 20px;
    font-weight: 400;
}
.card .header {
    color: #444;
    padding: 20px;
    position: relative;
    box-shadow: none;
}
.single_post {
    -webkit-transition: all .4s ease;
    transition: all .4s ease
}

.single_post .body {
    padding: 30px
}

.single_post .img-post {
    position: relative;
    overflow: hidden;
    max-height: 500px;
    margin-bottom: 30px
}

.single_post .img-post>img {
    -webkit-transform: scale(1);
    -ms-transform: scale(1);
    transform: scale(1);
    opacity: 1;
    -webkit-transition: -webkit-transform .4s ease, opacity .4s ease;
    transition: transform .4s ease, opacity .4s ease;
    max-width: 100%;
    filter: none;
    -webkit-filter: grayscale(0);
    -webkit-transform: scale(1.01)
}

.single_post .img-post:hover img {
    -webkit-transform: scale(1.02);
    -ms-transform: scale(1.02);
    transform: scale(1.02);
    opacity: .7;
    filter: gray;
    -webkit-filter: grayscale(1);
    -webkit-transition: all .8s ease-in-out
}

.single_post .img-post:hover .social_share {
    display: block
}

.single_post .footer {
    padding: 0 30px 30px 30px
}

.single_post .footer .actions {
    display: inline-block
}

.single_post .footer .stats {
    cursor: default;
    list-style: none;
    padding: 0;
    display: inline-block;
    float: right;
    margin: 0;
    line-height: 35px
}

.single_post .footer .stats li {
    border-left: solid 1px rgba(160, 160, 160, 0.3);
    display: inline-block;
    font-weight: 400;
    letter-spacing: 0.25em;
    line-height: 1;
    margin: 0 0 0 2em;
    padding: 0 0 0 2em;
    text-transform: uppercase;
    font-size: 13px
}

.single_post .footer .stats li a {
    color: #777
}

.single_post .footer .stats li:first-child {
    border-left: 0;
    margin-left: 0;
    padding-left: 0
}

.single_post h3 {
    font-size: 20px;
    text-transform: uppercase
}

.single_post h3 a {
    color: #242424;
    text-decoration: none
}

.single_post p {
    font-size: 16px;
    line-height: 26px;
    font-weight: 300;
    margin: 0
}

.single_post .blockquote p {
    margin-top: 0 !important
}

.single_post .meta {
    list-style: none;
    padding: 0;
    margin: 0
}

.single_post .meta li {
    display: inline-block;
    margin-right: 15px
}

.single_post .meta li a {
    font-style: italic;
    color: #959595;
    text-decoration: none;
    font-size: 12px
}

.single_post .meta li a i {
    margin-right: 6px;
    font-size: 12px
}

.single_post2 {
    overflow: hidden
}

.single_post2 .content {
    margin-top: 15px;
    margin-bottom: 15px;
    padding-left: 80px;
    position: relative
}

.single_post2 .content .actions_sidebar {
    position: absolute;
    top: 0px;
    left: 0px;
    width: 60px
}

.single_post2 .content .actions_sidebar a {
    display: inline-block;
    width: 100%;
    height: 60px;
    line-height: 60px;
    margin-right: 0;
    text-align: center;
    border-right: 1px solid #e4eaec
}

.single_post2 .content .title {
    font-weight: 100
}

.single_post2 .content .text {
    font-size: 15px
}

.right-box .categories-clouds li {
    display: inline-block;
    margin-bottom: 5px
}

.right-box .categories-clouds li a {
    display: block;
    border: 1px solid;
    padding: 6px 10px;
    border-radius: 3px
}

.right-box .instagram-plugin {
    overflow: hidden
}

.right-box .instagram-plugin li {
    float: left;
    overflow: hidden;
    border: 1px solid #fff
}

.comment-reply li {
    margin-bottom: 15px
}

.comment-reply li:last-child {
    margin-bottom: none
}

.comment-reply li h5 {
    font-size: 18px
}

.comment-reply li p {
    margin-bottom: 0px;
    font-size: 15px;
    color: #777
}

.comment-reply .list-inline li {
    display: inline-block;
    margin: 0;
    padding-right: 20px
}

.comment-reply .list-inline li a {
    font-size: 13px
}

@media (max-width: 640px) {
    .blog-page .left-box .single-comment-box>ul>li {
        padding: 25px 0
    }
    .blog-page .left-box .single-comment-box ul li .icon-box {
        display: inline-block
    }
    .blog-page .left-box .single-comment-box ul li .text-box {
        display: block;
        padding-left: 0;
        margin-top: 10px
    }
    .blog-page .single_post .footer .stats {
        float: none;
        margin-top: 10px
    }
    .blog-page .single_post .body,
    .blog-page .single_post .footer {
        padding: 30px
    }
}

	.contact{
		padding: 4%;
		height: 400px;
	}
	.col-md-3{
		background: #ff9b00;
		padding: 4%;
		border-top-left-radius: 0.5rem;
		border-bottom-left-radius: 0.5rem;
	}
	.contact-info{
		margin-top:10%;
	}
	.contact-info img{
		margin-bottom: 15%;
	}
	.contact-info h2{
		margin-bottom: 10%;
	}
	.col-md-9{
		background: #fff;
		padding: 3%;
		border-top-right-radius: 0.5rem;
		border-bottom-right-radius: 0.5rem;
	}
	.contact-form label{
		font-weight:600;
	}
	.contact-form button{
		background: #25274d;
		color: #fff;
		font-weight: 600;
		width: 25%;
	}
	.contact-form button:focus{
		box-shadow:none;
	}
</style>

<!-- landing page photo -->
<div class="landing-pic">
    <img src="/Image/animal.jpg" alt="" srcset="">
</div>


<!-- organization details section -->
<div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-md-12">
            <div class="bg-white p-3 rounded mt-2">
                <div class="row">
                    <div class="col-md-3">
                        <div
                            class="d-flex flex-column justify-content-center align-items-center icon-container bg-success text-white mb-2">
                            <i class="fa fa-flask fa-5x mb-3 mt-5"></i><span class="mb-4">Hands on Lab</span></div>
                    </div>
                    <div class="col-md-6 border-right">
                        <div class="listing-title">
                            <h5>Getting started with docker on linux for Azure</h5>
                        </div>
                        <div class="d-flex flex-row align-items-center">
                            <div class="d-flex flex-row align-items-center ratings"><span
                                    class="mr-1 rating-number">4</span>
                                <div class="stars"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                        class="fa fa-star"></i><i class="fa fa-star"></i></div><span
                                    class="mr-2 text-black-50 number-ratings">(12342 ratings)</span>
                            </div>
                            <div class="level mr-2"><span>Level:</span><span class="font-weight-bold">Beginner</span>
                            </div>
                            <div class="level mr-1"><span>Time:</span><span class="font-weight-bold">1h 20m</span></div>
                        </div>
                        <div class="description">
                            <p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting
                                industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                when an unknown printer...<br></p>
                        </div>
                        <div class="tags mb-2"><span>Microsoft</span><span>Azure</span><span>Development</span></div>
                    </div>
                    <div class="d-flex col-md-3">
                        <div class="d-flex flex-column justify-content-start user-profile w-100">
                            <div class="d-flex user"><img class="rounded-circle" src="https://i.imgur.com/6dOWqJu.jpg"
                                    width="50">
                                <div class="about ml-1"><span class="d-block text-black font-weight-bold">Jason
                                        Hamza</span><span>Cloud consultant</span></div>
                            </div>
                            <div class="progresses"><span>Designing</span>
                                <div class="progress mt-1">
                                    <div class="progress-bar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"
                                        style="width: 50%;">50%</div>
                                </div>
                            </div>
                            <div class="progresses"><span>Expertise</span>
                                <div class="progress mt-1">
                                    <div class="progress-bar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"
                                        style="width: 50%;">50%</div>
                                </div>
                            </div>
                            <div class="progresses"><span>Awareness</span>
                                <div class="progress mt-1">
                                    <div class="progress-bar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"
                                        style="width: 50%;">50%</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-white p-3 rounded mt-2">
                <div class="row">
                    <div class="col-md-3">
                        <div
                            class="d-flex flex-column justify-content-center align-items-center icon-container bg-success text-white mb-2">
                            <i class="fa fa-cloud fa-5x mb-3 mt-5"></i><span class="mb-4">Hands on&nbsp; ARM</span>
                        </div>
                    </div>
                    <div class="col-md-6 border-right">
                        <div class="listing-title">
                            <h5>Introduction to Azure Resource Manager</h5>
                        </div>
                        <div class="d-flex flex-row align-items-center">
                            <div class="d-flex flex-row align-items-center ratings"><span
                                    class="mr-1 rating-number">5</span>
                                <div class="stars"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                        class="fa fa-star"></i><i class="fa fa-star"></i></div><span
                                    class="mr-2 text-black-50 number-ratings">(2232 ratings)</span>
                            </div>
                            <div class="level mr-2"><span>Level:</span><span class="font-weight-bold">Advance</span>
                            </div>
                            <div class="level mr-1"><span>Time:</span><span class="font-weight-bold">2h 20m</span></div>
                        </div>
                        <div class="description">
                            <p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem
                                Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker
                                including versions...<br></p>
                        </div>
                        <div class="tags mb-2">
                            <span>Microsoft</span><span>Azure</span><span>Advanced</span><span>Manager</span></div>
                    </div>
                    <div class="d-flex col-md-3">
                        <div class="d-flex flex-column justify-content-start user-profile w-100">
                            <div class="d-flex user"><img class="rounded-circle" src="https://i.imgur.com/DdbCK7Q.jpg"
                                    width="50">
                                <div class="about ml-1"><span class="d-block text-black font-weight-bold">Simona
                                        Jurich</span><span>Cloud Architect</span></div>
                            </div>
                            <div class="progresses"><span>Designing</span>
                                <div class="progress mt-1">
                                    <div class="progress-bar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"
                                        style="width: 50%;">50%</div>
                                </div>
                            </div>
                            <div class="progresses"><span>Expertise</span>
                                <div class="progress mt-1">
                                    <div class="progress-bar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"
                                        style="width: 50%;">50%</div>
                                </div>
                            </div>
                            <div class="progresses"><span>Awareness</span>
                                <div class="progress mt-1">
                                    <div class="progress-bar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"
                                        style="width: 50%;">50%</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-white p-3 rounded mt-2">
                <div class="row">
                    <div class="col-md-3">
                        <div
                            class="d-flex flex-column justify-content-center align-items-center icon-container bg-success text-white mb-2">
                            <i class="fa fa-linux fa-5x mb-3 mt-5"></i><span class="mb-4">Hands on&nbsp; Linux</span>
                        </div>
                    </div>
                    <div class="col-md-6 border-right">
                        <div class="listing-title">
                            <h5>Cloud Messaging to Microsoft Azure&nbsp;</h5>
                        </div>
                        <div class="d-flex flex-row align-items-center">
                            <div class="d-flex flex-row align-items-center ratings"><span
                                    class="mr-1 rating-number">5</span>
                                <div class="stars"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                        class="fa fa-star"></i><i class="fa fa-star"></i></div><span
                                    class="mr-2 text-black-50 number-ratings">(232 ratings)</span>
                            </div>
                            <div class="level mr-2"><span>Level:</span><span class="font-weight-bold">Advance</span>
                            </div>
                            <div class="level mr-1"><span>Time:</span><span class="font-weight-bold">4h 10m</span></div>
                        </div>
                        <div class="description">
                            <p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem
                                Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker
                                including versions...<br></p>
                        </div>
                        <div class="tags mb-2">
                            <span>Microsoft</span><span>Azure</span><span>Linux</span><span>Nginx</span></div>
                    </div>
                    <div class="d-flex col-md-3">
                        <div class="d-flex flex-column justify-content-start user-profile w-100">
                            <div class="d-flex user"><img class="rounded-circle" src="https://i.imgur.com/Og6mhsh.jpg"
                                    width="50">
                                <div class="about ml-1"><span class="d-block text-black font-weight-bold">Maria
                                        Snun</span><span>Server Admin</span></div>
                            </div>
                            <div class="progresses"><span>Linux</span>
                                <div class="progress mt-1">
                                    <div class="progress-bar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"
                                        style="width: 50%;">50%</div>
                                </div>
                            </div>
                            <div class="progresses"><span>Apache</span>
                                <div class="progress mt-1">
                                    <div class="progress-bar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"
                                        style="width: 50%;">50%</div>
                                </div>
                            </div>
                            <div class="progresses"><span>Nginx</span>
                                <div class="progress mt-1">
                                    <div class="progress-bar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"
                                        style="width: 50%;">50%</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- blog section -->
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />


<div id="main-content" class="blog-page">
    <div class="container">
        <div class="row clearfix">
            <div class="col-lg-8 col-md-12 left-box">
                <div class="card single_post">
                    <div class="body">
                        <div class="img-post">
                            <img class="d-block img-fluid" src="https://via.placeholder.com/800x280/FFB6C1/000000" alt="First slide">
                        </div>
                        <h3><a href="blog-details.html">All photographs are accurate</a></h3>
                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal</p>
                    </div>
                    <div class="footer">
                        <div class="actions">
                            <a href="javascript:void(0);" class="btn btn-outline-secondary">Continue Reading</a>
                        </div>
                        <ul class="stats">
                            <li><a href="javascript:void(0);">General</a></li>
                            <li><a href="javascript:void(0);" class="fa fa-heart">28</a></li>
                            <li><a href="javascript:void(0);" class="fa fa-comment">128</a></li>
                        </ul>
                    </div>
                </div>

                <div class="card single_post">
                    <div class="body">
                        <div class="img-post">
                            <img class="d-block img-fluid" src="https://via.placeholder.com/800x280/FFB6C1/000000" alt="">
                        </div>
                        <h3><a href="blog-details.html">All photographs are accurate</a></h3>
                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal</p>
                    </div>
                    <div class="footer">
                        <div class="actions">
                            <a href="javascript:void(0);" class="btn btn-outline-secondary">Continue Reading</a>
                        </div>
                        <ul class="stats">
                            <li><a href="javascript:void(0);">General</a></li>
                            <li><a href="javascript:void(0);" class="fa fa-heart">28</a></li>
                            <li><a href="javascript:void(0);" class="fa fa-comment">128</a></li>
                        </ul>
                    </div>
                </div>

                <div class="card single_post">
                    <div class="body">
                        <div class="img-post">
                            <img class="d-block img-fluid" src="https://via.placeholder.com/800x280/FFB6C1/000000" alt="">
                        </div>
                        <h3><a href="blog-details.html">All photographs are accurate</a></h3>
                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal</p>
                    </div>
                    <div class="footer">
                        <div class="actions">
                            <a href="javascript:void(0);" class="btn btn-outline-secondary">Continue Reading</a>
                        </div>
                        <ul class="stats">
                            <li><a href="javascript:void(0);">General</a></li>
                            <li><a href="javascript:void(0);" class="fa fa-heart">28</a></li>
                            <li><a href="javascript:void(0);" class="fa fa-comment">128</a></li>
                        </ul>
                    </div>
                </div>

                <div class="card single_post">
                    <div class="body">
                        <div class="img-post">
                            <img class="d-block img-fluid" src="https://via.placeholder.com/800x280/FFB6C1/000000" alt="">
                        </div>
                        <h3><a href="blog-details.html">All photographs are accurate</a></h3>
                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal</p>
                    </div>
                    <div class="footer">
                        <div class="actions">
                            <a href="javascript:void(0);" class="btn btn-outline-secondary">Continue Reading</a>
                        </div>
                        <ul class="stats">
                            <li><a href="javascript:void(0);">General</a></li>
                            <li><a href="javascript:void(0);" class="fa fa-heart">28</a></li>
                            <li><a href="javascript:void(0);" class="fa fa-comment">128</a></li>
                        </ul>
                    </div>
                </div>
                                        
                <ul class="pagination pagination-primary">
                    <li class="page-item"><a class="page-link" href="javascript:void(0);">Previous</a></li>
                    <li class="page-item active"><a class="page-link" href="javascript:void(0);">1</a></li>
                    <li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
                    <li class="page-item"><a class="page-link" href="javascript:void(0);">3</a></li>
                    <li class="page-item"><a class="page-link" href="javascript:void(0);">Next</a></li>
                </ul>                
            </div>
            <div class="col-lg-4 col-md-12 right-box">
                <div class="card">
                    <div class="body search">
                        <div class="input-group m-b-0">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-search"></i></span>
                            </div>
                            <input type="text" class="form-control" placeholder="Search...">                                    
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="header">
                        <h2>Categories Clouds</h2>
                    </div>
                    <div class="body widget">
                        <ul class="list-unstyled categories-clouds m-b-0">
                            <li><a href="javascript:void(0);">eCommerce</a></li>
                            <li><a href="javascript:void(0);">Microsoft Technologies</a></li>
                            <li><a href="javascript:void(0);">Creative UX</a></li>
                            <li><a href="javascript:void(0);">Wordpress</a></li>
                            <li><a href="javascript:void(0);">Angular JS</a></li>
                            <li><a href="javascript:void(0);">Enterprise Mobility</a></li>
                            <li><a href="javascript:void(0);">Website Design</a></li>
                            <li><a href="javascript:void(0);">HTML5</a></li>
                            <li><a href="javascript:void(0);">Infographics</a></li>
                            <li><a href="javascript:void(0);">Wordpress Development</a></li>
                        </ul>
                    </div>
                </div>
                <div class="card">
                    <div class="header">
                        <h2>Popular Posts</h2>                        
                    </div>
                    <div class="body widget popular-post">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="single_post">
                                    <p class="m-b-0">Apple Introduces Search Ads Basic</p>
                                    <span>jun 22, 2018</span>
                                    <div class="img-post">
                                        <img src="https://via.placeholder.com/280x280/FFB6C1/000000" alt="Awesome Image">                                        
                                    </div>                                            
                                </div>
                                <div class="single_post">
                                    <p class="m-b-0">new rules, more cars, more races</p>
                                    <span>jun 8, 2018</span>
                                    <div class="img-post">
                                        <img src="https://via.placeholder.com/280x280/FFB6C1/000000" alt="Awesome Image">                                            
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="header">
                        <h2>Instagram Post</h2>
                    </div>
                    <div class="body widget">
                        <ul class="list-unstyled instagram-plugin m-b-0">
                            <li><a href="javascript:void(0);"><img src="https://via.placeholder.com/80x80/FFB6C1/000000" alt="image description"></a></li>
                            <li><a href="javascript:void(0);"><img src="https://via.placeholder.com/80x80/FFB6C1/000000" alt="image description"></a></li>
                            <li><a href="javascript:void(0);"><img src="https://via.placeholder.com/80x80/FFB6C1/000000" alt="image description"></a></li>
                            <li><a href="javascript:void(0);"><img src="https://via.placeholder.com/80x80/FFB6C1/000000" alt="image description"></a></li>
                            <li><a href="javascript:void(0);"><img src="https://via.placeholder.com/80x80/FFB6C1/000000" alt="image description"></a></li>
                            <li><a href="javascript:void(0);"><img src="https://via.placeholder.com/80x80/FFB6C1/000000" alt="image description"></a></li>
                            <li><a href="javascript:void(0);"><img src="https://via.placeholder.com/80x80/FFB6C1/000000" alt="image description"></a></li>
                            <li><a href="javascript:void(0);"><img src="https://via.placeholder.com/80x80/FFB6C1/000000" alt="image description"></a></li>
                            <li><a href="javascript:void(0);"><img src="https://via.placeholder.com/80x80/FFB6C1/000000" alt="image description"></a></li>
                        </ul>
                    </div>
                </div>
                <div class="card">
                    <div class="header">
                        <h2>Email Newsletter <small>Get our products/news earlier than others, let’s get in touch.</small></h2>
                    </div>
                    <div class="body widget newsletter">                        
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Enter Email">
                            <div class="input-group-append">
                                <span class="input-group-text"><i class="icon-paper-plane"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<!-- contact form -->
<div class="container contact">
	<div class="row">
		<div class="col-md-3">
			<div class="contact-info">
				<img src="https://image.ibb.co/kUASdV/contact-image.png" alt="image"/>
				<h2>Contact Us</h2>
				<h4>We would love to hear from you !</h4>
			</div>
		</div>
		<div class="col-md-9">
			<div class="contact-form">
				<div class="form-group">
				  <label class="control-label col-sm-2" for="fname">First Name:</label>
				  <div class="col-sm-10">          
					<input type="text" class="form-control" id="fname" placeholder="Enter First Name" name="fname">
				  </div>
				</div>
				<div class="form-group">
				  <label class="control-label col-sm-2" for="lname">Last Name:</label>
				  <div class="col-sm-10">          
					<input type="text" class="form-control" id="lname" placeholder="Enter Last Name" name="lname">
				  </div>
				</div>
				<div class="form-group">
				  <label class="control-label col-sm-2" for="email">Email:</label>
				  <div class="col-sm-10">
					<input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
				  </div>
				</div>
				<div class="form-group">
				  <label class="control-label col-sm-2" for="comment">Comment:</label>
				  <div class="col-sm-10">
					<textarea class="form-control" rows="5" id="comment"></textarea>
				  </div>
				</div>
				<div class="form-group">        
				  <div class="col-sm-offset-2 col-sm-10">
					<button type="submit" class="btn btn-default">Submit</button>
				  </div>
				</div>
			</div>
		</div>
@endsection