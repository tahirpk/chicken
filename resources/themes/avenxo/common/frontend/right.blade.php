<div class="widget">
                        <h2 class="heading">Today's Hot Videos</h2>
                        <div class="carousals">
                            <div id="carouselvideo" class="carousel slide" data-ride="carousel">
                                <!-- Wrapper for slides -->
                                <div class="carousel-inner">
                                    <?php $i=0;foreach($news as $thvideolist){?>
                                    <div class="<?php if($i==0) echo 'item active'; else echo 'item';?>">
                                        <?php foreach($thvideolist as $thvideo){?>
                                        <!-- Video Box Start -->
                                        <div class="videobox2">
                                            <figure>
                                                <!-- Video Thumbnail Start --> 
                                                <a href="{{URL::To('video/'.str_replace(' ', '-', strtolower($thvideo['title'])).'/'.$thvideo['id'])}}">
                                                    <img src="{{ $thvideo['thumbnail_url'] }}" class="img-responsive hovereffect" alt="" />
                                                </a>
                                                <!-- Video Thumbnail End -->
                                                <!-- Video Info Start -->
                                                <div class="vidopts">
                                                    <ul>
                                                        <li><i class="fa fa-heart"></i>1056</li>
                                                        <li><i class="fa fa-clock-o"></i>12:23</li>
                                                    </ul>
                                                    <div class="clearfix"></div>
                                                </div>
                                                <!-- Video Info End -->
                                            </figure>
                                            <!-- Video Title Start -->
                                            <h4><a href="{{URL::To('video/'.str_replace(' ', '-', strtolower($thvideo['title'])).'/'.$thvideo['id'])}}">{{ $thvideo['title'] }}</a></h4>
                                            <!-- Video Title End -->
                                        </div>
                                        <?php }?>
                                        <!-- Video Box End -->
                                        
                                    </div>
                                    <?php $i++; }?>
                                    
                                </div>
                                <div class="carouselpagination">
                                    <!-- Indicators -->
                                    <ol class="carousel-indicators">
                                        <li data-target="#carouselvideo" data-slide-to="0" class="active"></li>
                                        <li data-target="#carouselvideo" data-slide-to="1"></li>
                                        <li data-target="#carouselvideo" data-slide-to="2"></li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>