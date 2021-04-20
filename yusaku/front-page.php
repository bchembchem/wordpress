
<?php get_header(); ?>
            <div class="intro animation-target" id="intro">
                <div class="explanation">
                    <div class="left">
                        <h2 class="intro-title">概要</h2>
                    </div>
                    <div class="right ">
                        <p class='right-text'>
                            WEB集客サービスをご提供
                        </p>
                        <p class='right-text'>
                            売上という成果に至るまで徹底サポート。市場調査を行い、ニーズを徹底分析
                        </p>
                        <p class='right-text'>
                            ＷＥＢメディア、テレビ、新聞や雑誌など、お客様のターゲット層の多い大手メディアを選定
                        </p>
                    </div>
                </div>
            </div>

            <div class="services animation-target" id="services">
                <div class="services-title">
                    <h2>サービス</h2>
                </div>
                <div class="services-outer">
                    <div class="inner-img">
                        <img class='long-img' src="<?php echo get_template_directory_uri(); ?>/images/firmbee-com-ir5lIkVFqC4-unsplash.jpg" alt="">
                        <h3 class='long-img-title'>
                            ①Webサイト制作
                        </h3>
                        <p class='long-img-description'>
                            サイトからの収益を最大化させるご支援
                        </p>
                    </div>
                    <div class="inner-img">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/computer-767776_1920.jpg" alt="">
                        <h3 class='long-img-title'>
                            ②SEOコンサルティング
                        </h3>
                        <p class='long-img-description'>
                            「問い合わせ増加」「WEBサイトからの売上増加」など、お客様のビジネスゴールを達成するために最適な施策をプランニング
                        </p>
                    </div>
                </div>  
            </div>
            
            <div class="second-columns-services animation-target" id="services">
                <div class="second-columns-services-title">
                    <h2>Services</h2>
                </div>
                <div class="second-services-outer">
                    <div class="second-columns-img">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/content-marketing-4111003_1920.jpg" alt="">
                        <h3 class='long-img-title'>
                            ③コンテンツ販売
                        </h3>
                        <p class='long-img-description'>
                            「ユーザーに見つけてもらえるコンテンツ」と「ユーザーに読まれるコンテンツ」の両方を満たし、お客様のWebサイトに新たな価値を加えることでWebプロモーションの効果を最大化
                        </p>
                    </div>
                </div>
            </div>

            <div class="news animation-target" id="news">
                <h2 class='news-title'>
                    ブログ
                </h2>
                <div class="news-flex">
                    <div class="news-img">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/online-marketing-1246457_1920.jpg" alt="">
                    </div>  
                    <?php 
                    // if (have_posts()) : while (have_posts()) : the_post(); 
                    $posts = get_posts();
                    foreach ($posts as $post) {
                        setup_postdata($post);
                    ?>
                        <div class="news-description">
                            <p><?php the_time('Y.m.d') ?></p>
                            <p class="news-description">
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </p>
                        </div>
                    <?php
                    }
                    wp_reset_postdata();
                    ?>
                    
                    <a class='readmore 'href="<?php echo home_url(); ?>">一覧へ</a>
                </div>
            </div>

            <div class="contact animation-target" id="contact">
                <h2 class='contact-title'>
                    お問い合わせ
                </h2>
                <div class="Form">
                    <div class="Form-Item">
                        <p class="Form-Item-Label">
                        <span class="Form-Item-Label-Required">必須</span>会社名
                        </p>
                        <input type="text" class="Form-Item-Input" placeholder="例）株式会社令和">
                    </div>
                    <div class="Form-Item">
                        <p class="Form-Item-Label"><span class="Form-Item-Label-Required">必須</span>氏名</p>
                        <input type="text" class="Form-Item-Input" placeholder="例）山田太郎">
                    </div>
                    <div class="Form-Item">
                        <p class="Form-Item-Label"><span class="Form-Item-Label-Required">必須</span>電話番号</p>
                        <input type="text" class="Form-Item-Input" placeholder="例）000-0000-0000">
                    </div>
                    <div class="Form-Item">
                        <p class="Form-Item-Label"><span class="Form-Item-Label-Required">必須</span>メールアドレス</p>
                        <input type="email" class="Form-Item-Input" placeholder="例）example@gmail.com">
                    </div>
                    <div class="Form-Item">
                        <p class="Form-Item-Label isMsg"><span class="Form-Item-Label-Required">必須</span>お問い合わせ内容</p>
                        <textarea class="Form-Item-Textarea"></textarea>
                    </div>
                    <input type="submit" class="Form-Btn" value="送信する">
                </div>
            </div>
            <hr>

            <?php get_footer(); ?>