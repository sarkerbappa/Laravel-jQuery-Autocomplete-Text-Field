<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title> Laravel + jQuery UI + Ajax  Text field fill up  auto Suggestion from database </title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

        <!-- Bootstrap 3.3.5 -->
        <link rel="stylesheet" href="{{ URL::asset('public/bootstrap/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{ URL:: asset('public/bootstrap/css/bootstrap-theme.css')}}">
        <link rel="stylesheet" href="{{ URL:: asset('public/css/normalize.css')}}">
        <link rel="stylesheet" href="{{ URL:: asset('public/css/custom.css')}}">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/css?family=Shrikhand" rel="stylesheet"> 
        <!-- Ionicons -->

        <script>
            $( function() {
                $( "#country" ).autocomplete({
                    minLength: 0,
                    source: function (request, response) {
                        $.ajax({
                            type: 'GET',
                            url: '/autocomplete/'+request.term,
                            dataType: "json",
                            cache: false,
                            success: function (data) {
                                console.log(data);
                                response($.map(data, function (item) {
                                    return {
                                        label:item.country_name ,
                                        id: item.country_id,
                                    };
                                }));
                            },
                        });
                    },
                    
                    focus: function( event, ui ) {
                        $( "#country" ).val( ui.item.label );
                        return false;
                    },
                    select: function( event, ui ) {
                        $( "#country" ).val( ui.item.label );
                        $( "#country-id" ).val( ui.item.id );
                        return false;
                    }
                })
                .autocomplete( "instance" )._renderItem = function( ul, item ) {
                    return $( "<li>" )
                    .append( "<div>" + item.label + "</div>" )
                    .appendTo( ul );
                };
            } );
        </script>

    </head>

    <body>
        <div class="bpt-wrapper">
            <header>
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-8">
                        <div class="bpt-header-title-box">
                            <h1> (Laravel 5.3 + jQuery UI + Ajax)</h1>
                            <h3>Text Field Auto  Suggestion</h3>
                        </div> 
                    </div>
                    <div class="col-md-2"> </div>
                </div>
            </header><!-- End of the header -->

            <!--  .............................      Section start  ......................................  -->
            <section>
                <div class="row">
                    <div class="col-md-4"></div>
                    <div class="col-md-4">
                        <div class="bpt-middle-body-wrapper">
                            <h3>Country Name</h3>
                            <input type="text" class="form-control" id="country" placeholder="Type frist letter of any country">
                        </div>
                            
                    </div>
                    <div class="col-md-4"> 
                        <div class="bpt-middle-body-wrapper">
                            <h3>Country Id</h3>
                            <div class="row">
                                <div class="col-md-4">
                                    <input class="form-control" type="text" id="country-id" disabled>
                                </div>
                                <div class="col-md-2">
                                    <div class="bpt-github-link"> <a href="https://github.com/sarkerbappa/Laravel-jQuery-Autocomplete-Text-Field-With-Value-Id" class="btn btn-success btn-md dropdown-toggle" type="button"> GitHub</a> </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="bpt-github-link"> <a href="#" class="btn btn-info btn-md dropdown-toggle" type="button"> Tutorial</a> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section> <!-- end of the section -->

            <!-- ................................. End of the section ..................................         -->

            <!--....................................Footer start.........................................        -->
            <footer>
                <div class ="footer navbar-fixed-bottom bpt-footer">
                    <div class="row">
                        <div class="col-md-2"></div>
                        <div class="col-md-7">
                            <div class="bpt-middle-footer-wrapper">
                                <div id="share-buttons">

                                    <!-- Buffer -->
                                    <a href="https://bufferapp.com/add?url=http://bappasarkar.info/&amp;text=Simple Share Buttons" target="_blank">
                                        <img src="https://simplesharebuttons.com/images/somacro/buffer.png" alt="Buffer" />
                                    </a>

                                    <!-- Digg -->
                                    <a href="http://www.digg.com/submit?url=http://bappasarkar.info/" target="_blank">
                                        <img src="https://simplesharebuttons.com/images/somacro/diggit.png" alt="Digg" />
                                    </a>

                                    <!-- Email -->
                                    <a href="mailto:?Subject=Simple Share Buttons&amp;Body=I%20saw%20this%20and%20thought%20of%20you!%20 https://simplesharebuttons.com">
                                        <img src="https://simplesharebuttons.com/images/somacro/email.png" alt="Email" />
                                    </a>

                                    <!-- Facebook -->
                                    <a href="http://www.facebook.com/sharer.php?url=http://bappasarkar.info/" target="_blank">
                                        <img src="https://simplesharebuttons.com/images/somacro/facebook.png" alt="Facebook" />
                                    </a>

                                    <!-- Google+ -->
                                    <a href="https://plus.google.com/share?url=http://bappasarkar.info/" target="_blank">
                                        <img src="https://simplesharebuttons.com/images/somacro/google.png" alt="Google" />
                                    </a>

                                    <!-- LinkedIn -->
                                    <a href="http://www.linkedin.com/shareArticle?mini=true&amp;url=http://bappasarkar.info/" target="_blank">
                                        <img src="https://simplesharebuttons.com/images/somacro/linkedin.png" alt="LinkedIn" />
                                    </a>

                                    <!-- Pinterest -->
                                    <a href="javascript:void((function()%7Bvar%20e=document.createElement('script');e.setAttribute('type','text/javascript');e.setAttribute('charset','UTF-8');e.setAttribute('src','http://assets.pinterest.com/js/pinmarklet.js?r='+Math.random()*99999999);document.body.appendChild(e)%7D)());">
                                        <img src="https://simplesharebuttons.com/images/somacro/pinterest.png" alt="Pinterest" />
                                    </a>

                                    <!-- Print -->
                                    <a href="javascript:;" onclick="window.print()">
                                        <img src="https://simplesharebuttons.com/images/somacro/print.png" alt="Print" />
                                    </a>

                                    <!-- Reddit -->
                                    <a href="http://reddit.com/submit?url=http://bappasarkar.info/&amp;title=Simple Share Buttons" target="_blank">
                                        <img src="https://simplesharebuttons.com/images/somacro/reddit.png" alt="Reddit" />
                                    </a>

                                    <!-- StumbleUpon-->
                                    <a href="http://www.stumbleupon.com/submit?url=http://bappasarkar.info/&amp;title=Simple Share Buttons" target="_blank">
                                        <img src="https://simplesharebuttons.com/images/somacro/stumbleupon.png" alt="StumbleUpon" />
                                    </a>

                                    <!-- Tumblr-->
                                    <a href="http://www.tumblr.com/share/link?url=http://bappasarkar.info/&amp;title=Simple Share Buttons" target="_blank">
                                        <img src="https://simplesharebuttons.com/images/somacro/tumblr.png" alt="Tumblr" />
                                    </a>

                                    <!-- Twitter -->
                                    <a href="https://twitter.com/share?url=http://bappasarkar.info/&amp;text=Simple%20Share%20Buttons&amp;hashtags=simplesharebuttons" target="_blank">
                                        <img src="https://simplesharebuttons.com/images/somacro/twitter.png" alt="Twitter" />
                                    </a>

                                    <!-- VK -->
                                    <a href="http://vkontakte.ru/share.php?url=http://bappasarkar.info/" target="_blank">
                                        <img src="https://simplesharebuttons.com/images/somacro/vk.png" alt="VK" />
                                    </a>

                                    <!-- Yummly -->
                                    <a href="http://www.yummly.com/urb/verify?url=http://bappasarkar.info/&amp;title=Simple Share Buttons" target="_blank">
                                        <img src="https://simplesharebuttons.com/images/somacro/yummly.png" alt="Yummly" />
                                    </a>

                                </div>
                            </div> 
                        </div>
                        <div class="col-md-3">
                            <div class="bpt-name-link">
                                <a href="http://bappasarkar.info/"><h3>Subrata Sarkar Bappa</h3></a>
                            </div>

                        </div>
                    </div> <!--end of the row -->  
                </div>
            </footer>
            <!--...................................End of the footer..........................................-->
        </div><!-- ./wrapper -->

        <script src="{{ URL::asset('public/bootstrap/js/bootstrap.min.js')}}"></script>
        <script src="{{ URL::asset('public/js/custom.js')}}"></script>

    </body>
</html>
