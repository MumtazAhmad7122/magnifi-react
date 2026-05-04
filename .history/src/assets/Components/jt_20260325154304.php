<?php
/**
 * Template Name: Media
 **/

get_header(); 

$post_thumbnail_id = get_post_thumbnail_id($post->ID);
$url = $post_thumbnail_id ? wp_get_attachment_url($post_thumbnail_id, 'full') : ''; 
?>

<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/home.css" />

<style>
/* --- Existing Modal & Slider Styling --- */
.isl-overlay {
    display: none; position: fixed; z-index: 10000; left: 0; top: 0; width: 100%; height: 100%;
    background: rgba(0, 0, 0, 0.95); flex-direction: column; align-items: center; justify-content: center;
}
#closeIslModal, #closeVideoModal { position: absolute; top: 20px; right: 30px; color: #fff; font-size: 40px; cursor: pointer; z-index: 10001; }
.isl-slider-container { display: flex; align-items: center; justify-content: center; width: 90%; max-width: 1000px; position: relative; }
.isl-main-view img { max-width: 100%; max-height: 75vh; border: 4px solid #fff; border-radius: 8px; box-shadow: 0 0 20px rgba(0,0,0,0.5); }
.nav-btn { background: rgba(255,255,255,0.1); color: white; border: none; width: 50px; height: 50px; cursor: pointer; font-size: 24px; border-radius: 50%; transition: 0.3s; }
.nav-btn:hover { background: #008c45; }
.isl-thumb-strip { margin-top: 20px; display: flex; gap: 10px; overflow-x: auto; max-width: 80%; padding: 10px; }
.isl-thumb-strip img { width: 80px; height: 60px; object-fit: cover; cursor: pointer; opacity: 0.5; transition: 0.3s; border-radius: 4px; }
.isl-thumb-strip img.active-thumb { opacity: 1; border: 2px solid #008c45; }
section.search-filter-sec { padding: 38px 0px; }  

/* --- Layout & Tabs --- */
#media-main-content { background: #fff; padding-bottom: 80px; }
.media-tabs-nav { display: flex; flex-wrap: nowrap !important; overflow-x: auto; border: 1px solid #ddd; margin-bottom: 30px; background: #f9f9f9; width: fit-content; max-width: 100%; border-radius: 4px; }
.media-tabs-nav::-webkit-scrollbar { display: none; }
.tab-trigger, .pub-pill { cursor: pointer; padding: 18px 25px; transition: 0.3s; background: #f9f9f9; border-right: 1px solid #ddd; min-width: 150px; text-align: center; font-size: 14px; font-weight: 700; color: #333; white-space: nowrap; }
.tab-trigger:last-child, .pub-pill:last-child { border-right: none; }
.tab-trigger.active, .pub-pill.active { background-color: #008c45 !important; color: #fff !important; }
.pub-sub-nav { display: flex; border: 1px solid #ddd; margin-bottom: 30px; background: #f9f9f9; width: fit-content; border-radius: 4px; overflow: hidden;}
.parent-tab-container { border: 1px solid #e0e0e0; border-radius: 8px; padding: 30px; background: #fff; min-height: 400px; }
.media-pane, .sub-pane { width: 100%; display: none; }
.media-pane.active, .sub-pane.active { display: block !important; }

/* --- Description & Grid --- */
.full-width-excerpt-container { width: 100%; margin-bottom: 25px; padding: 20px; background: #f8f9fa; border-left: 5px solid #008c45; border-radius: 4px; }
.custom-card-excerpt { font-size: 1rem; color: #444; line-height: 1.6; margin: 0; }
.media-grid-row { display: grid; grid-template-columns: repeat(3, 1fr); gap: 30px; align-items: stretch; }
.bordered-card-container { border: 1px solid #e0e0e0; border-radius: 12px; background: #fff; overflow: hidden; display: flex; flex-direction: column; height: 100%; transition: 0.3s; }
.bordered-card-container:hover { box-shadow: 0 10px 25px rgba(0,0,0,0.1); transform: translateY(-3px); }
.custom-card-image { width: 100%; height: 220px; background: #000; position: relative; }
.custom-card-image img { width: 100%; height: 100%; object-fit: cover; display: block; border: none; }
.custom-card-body { padding: 20px; flex-grow: 1; display: flex; flex-direction: column; }
.custom-card-title { color: #000 !important; font-size: 1.1rem; font-weight: 600; margin-bottom: 10px }
.custom-card-excerpt-scrollable { font-size: 0.9rem; color: #666; margin-bottom: 15px; max-height: 100px; overflow-y: auto; padding-right: 5px; }
.custom-card-excerpt-scrollable::-webkit-scrollbar { width: 4px; }
.custom-card-excerpt-scrollable::-webkit-scrollbar-thumb { background: #008c45; border-radius: 10px; }
.custom-card-footer { display: flex; justify-content: space-between; align-items: center; margin-top: auto; padding-top: 15px; }
.custom-card-date { background: #008c45; color: #fff !important; padding: 5px 12px; font-size: 0.8rem; border-radius: 4px; font-weight: 700; display: inline-block; line-height: 1; }
.btn-download { background: #008c45; color: #fff !important; border-radius: 6px; padding: 7px 16px; font-size: 0.9rem; text-decoration: none; font-weight: 700; transition: 0.3s; border: none; display: inline-flex; align-items: center; cursor: pointer; gap: 8px; }

/* --- Video Modal Specific --- */
.v-modal-body { width: 90%; max-width: 900px; max-height: 80vh; overflow-y: auto; padding: 20px; background: #111; border-radius: 10px; }
.v-container-item { margin-bottom: 20px; position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden; border-radius: 8px; }
.v-container-item iframe { position: absolute; top: 0; left: 0; width: 100%; height: 100%; }

@media (max-width: 1024px) { .media-grid-row { grid-template-columns: repeat(2, 1fr); } }
@media (max-width: 767px) { .media-grid-row { grid-template-columns: 1fr; } .pub-sub-nav { flex-wrap: nowrap !important; overflow-x: auto!Important; width:100% } }
</style>

<section class="banner"><img src="<?php echo esc_url($url); ?>" style="width: 100%; height: auto; display: block;"></section>

<div id="media-main-content">
    <section class="search-filter-sec" style="padding: 38px 0px;">
        <div class="container text-center">
            <input type="text" id="instant-media-search" class="form-control" style="border-radius: 50px; padding: 12px 25px; max-width: 600px; margin: 0 auto; border: 1px solid #ddd;" placeholder="Search articles, videos, or years...">
            <div id="search-status-text" style="margin-top: 15px; font-style: italic; color: #666;">Showing all results</div>
        </div>
    </section>

    <div class="container">
        <div class="media-tabs-nav">
            <div class="tab-trigger active" data-target="tab-press">Press Releases & Announcements</div>
            <div class="tab-trigger" data-target="tab-publication">Publications</div>
            <div class="tab-trigger" data-target="tab-man-vid">Manufacturing Facility Media</div>
            <div class="tab-trigger" data-target="tab-corp-vid">Corporate Videos</div>
            <div class="tab-trigger" data-target="tab-factory">Life at ISL</div>
            <div class="tab-trigger" data-target="tab-uncovered">ISL Steel Uncovered</div>
        </div>

        <div class="media-tabs-content">
            <div id="tab-press" class="media-pane active">
                <div class="parent-tab-container">
                    <?php render_isl_desc('press-release'); ?>
                    <div class="pub-sub-nav">
                        <div class="pub-pill active" data-sub="sub-awards">Awards & Accolades</div>
                        <div class="pub-pill" data-sub="sub-key">Key Developments</div>
                        <div class="pub-pill" data-sub="sub-ex-intl">International Exhibitions</div>
                        <div class="pub-pill" data-sub="sub-ex-dom">Domestic Exhibitions</div>
                        <div class="pub-pill" data-sub="sub-general">General</div>
                        <div class="pub-pill" data-sub="sub-csr">CSR</div>
                    </div>
                    <div id="sub-awards" class="sub-pane active"><?php render_isl_cards('awards-accolades'); ?></div>
                    <div id="sub-key" class="sub-pane"><?php render_isl_cards('key-developments'); ?></div>
                    <div id="sub-ex-intl" class="sub-pane"><?php render_isl_cards('international-exhibitions'); ?></div>
                    <div id="sub-ex-dom" class="sub-pane"><?php render_isl_cards('domestic-exhibitions'); ?></div>
                    <div id="sub-csr" class="sub-pane"><?php render_isl_cards('csr'); ?></div>
                    <div id="sub-general" class="sub-pane"><?php render_isl_cards('general'); ?></div>
                </div>
            </div>

            <div id="tab-publication" class="media-pane">
                <div class="parent-tab-container">
                    <?php render_isl_desc('publication'); ?>
                    <div class="pub-sub-nav">
                        <div class="pub-pill active" data-sub="sub-newsletter">Newsletter</div>
                        <div class="pub-pill" data-sub="sub-annual">Annual Report</div>
                    </div>
                    <div id="sub-newsletter" class="sub-pane active"><?php render_isl_cards('newsletter'); ?></div>
                    <div id="sub-annual" class="sub-pane"><?php render_isl_cards('annual-report'); ?></div>
                </div>
            </div>

            <div id="tab-man-vid" class="media-pane"><div class="parent-tab-container"><?php render_isl_desc('isl-manufacturing-facility-videos'); ?><?php render_isl_cards('isl-manufacturing-facility-videos'); ?></div></div>
            <div id="tab-corp-vid" class="media-pane"><div class="parent-tab-container"><?php render_isl_desc('isl-corporate-videos'); ?><?php render_isl_cards('isl-corporate-videos'); ?></div></div>
            <div id="tab-factory" class="media-pane"><div class="parent-tab-container"><?php render_isl_desc('life-at-isl-factory'); ?><?php render_isl_cards('life-at-isl-factory'); ?></div></div>
            <div id="tab-service" class="media-pane"><div class="parent-tab-container"><?php render_isl_desc('life-at-isl-service-center'); ?><?php render_isl_cards('life-at-isl-service-center'); ?></div></div>
            
            <div id="tab-uncovered" class="media-pane">
                <div class="parent-tab-container">
                    <?php render_isl_desc('isl-steel-uncovered'); ?>
                    <div class="pub-sub-nav">
                        <div class="pub-pill active" data-sub="sub-s1">Season 1</div>
                        <div class="pub-pill" data-sub="sub-s2">Season 2</div>
                    </div>
                    <div id="sub-s1" class="sub-pane active"><?php render_isl_cards('season-1'); ?></div>
                    <div id="sub-s2" class="sub-pane"><?php render_isl_cards('season-2'); ?></div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="islOverlay" class="isl-overlay">
    <span id="closeIslModal">&times;</span>
    <div class="isl-slider-container">
        <button id="prevBtn" class="nav-btn">&#10094;</button>
        <div class="isl-main-view"><img id="islActiveImage" src=""></div>
        <button id="nextBtn" class="nav-btn">&#10095;</button>
    </div>
    <div class="isl-thumb-strip" id="islImageGrid"></div>
</div>

<div id="videoGalleryModal" class="isl-overlay">
    <span id="closeVideoModal">&times;</span>
    <div class="v-modal-body" id="videoContainer"></div>
</div>

<?php
/** --- HELPER FUNCTIONS --- **/

function render_isl_desc($slug) {
    $args_top = array(
        'post_type'      => 'medias',
        'posts_per_page' => 1,
        'tax_query'      => array(array('taxonomy' => 'media_category', 'field' => 'slug', 'terms' => $slug)),
        'meta_query'     => array(array('key' => 'show_on_top', 'value' => '1', 'compare' => '='))
    );
    $q_top = new WP_Query($args_top);
    if ($q_top->have_posts()) {
        while ($q_top->have_posts()) { $q_top->the_post();
            echo '<div class="full-width-excerpt-container">
                    <div class="custom-card-excerpt">' . apply_filters('the_content', get_the_content()) . '</div>
                  </div>';
        }
        wp_reset_postdata();
        return; 
    }
    $term = get_term_by('slug', $slug, 'media_category');
    if ($term && !empty($term->description)) {
        echo '<div class="full-width-excerpt-container"><div class="custom-card-excerpt">' . wpautop($term->description) . '</div></div>';
    }
}

function render_isl_cards($slug) {
    $q = new WP_Query(array(
        'post_type'      => 'medias',
        'posts_per_page' => -1,
        'tax_query'      => array(array('taxonomy' => 'media_category', 'field' => 'slug', 'terms' => $slug))
    ));

    echo '<div class="media-grid-row">';
    if($q->have_posts()): while($q->have_posts()): $q->the_post();
        
        $is_top = get_field('show_on_top');
        if($is_top == '1') continue; 

        $vid_field = get_field('visit'); 
        $gal = get_field('gallery'); 
        $raw = get_field('downloads'); 
        $date = get_field('date') ?: get_the_date('Y');
        
        $video_urls = !empty($vid_field) ? array_map('trim', explode(',', $vid_field)) : [];
        $feat_img = get_the_post_thumbnail_url(get_the_ID(), 'medium_large') ?: 'https://via.placeholder.com/400x250?text=No+Image';
        
        // Determine the primary link
        $f_url = !empty($vid_field) ? $video_urls[0] : (is_array($raw) ? $raw['url'] : $raw);

        /** --- Dynamic Button Logic --- **/
        $btn_text = 'Download'; // Default
        $btn_icon = '';
        
        if ($f_url) {
            if (strpos($f_url, 'whatsapp.com') !== false) {
                $btn_text = 'View Channel';
                $btn_icon = '<img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg" style="width:16px; height:16px; filter: brightness(0) invert(1); margin-right:5px;">';
            } elseif (preg_match('%(?:youtube\.com|youtu\.be)%i', $f_url)) {
                $btn_text = 'Watch Video';
                $btn_icon = '<i class="fa fa-play" style="margin-right:5px;"></i> '; // Requires FontAwesome, or use a play SVG
            } elseif (filter_var($f_url, FILTER_VALIDATE_URL) && strpos($f_url, get_site_url()) === false && !empty($raw)) {
                // If it's a link and not a direct file download from your site
                $btn_text = 'Visit Page';
            }
        }
    ?>
    <div class="media-post-group-item" data-search-title="<?php echo esc_attr(strtolower(get_the_title())); ?>" data-search-date="<?php echo esc_attr($date); ?>">
        <div class="bordered-card-container">
            <div class="custom-card-image">
                <?php 
                if (count($video_urls) > 1): ?>
                    <img src="<?php echo esc_url($feat_img); ?>" style="width:100%; height:100%; object-fit:cover; opacity:0.6;">
                    <button class="btn-download open-video-gallery" data-videos='<?php echo json_encode($video_urls); ?>' style="position:absolute; z-index:5; top: 50%; left: 50%; transform: translate(-50%, -50%);">View Video Gallery</button>
                
                <?php elseif (count($video_urls) == 1): 
                    $yt_id = '';
                    preg_match('%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i', $video_urls[0], $match);
                    if (isset($match[1])) { $yt_id = $match[1]; }

                    if (!empty($yt_id)): 
                        $final_url = "https://www.youtube.com/embed/" . $yt_id . "?rel=0&modestbranding=1";
                ?>
                        <iframe width="100%" height="100%" src="<?php echo esc_url($final_url); ?>" 
                                frameborder="0" referrerpolicy="strict-origin-when-cross-origin"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                                allowfullscreen style="position: absolute; top:0; left:0; width:100%; height:100%;"></iframe>
                    <?php else: ?>
                        <img src="<?php echo esc_url($feat_img); ?>" style="width: 100%; height: 100%; object-fit: cover;">
                    <?php endif; ?>

                <?php else: ?>
                    <img src="<?php echo esc_url($feat_img); ?>" style="width: 100%; height: 100%; object-fit: cover;">
                <?php endif; ?>
            </div>

            <div class="custom-card-body">
                <h3 class="custom-card-title"><?php the_title(); ?></h3>
                <div class="custom-card-excerpt-scrollable"><?php echo get_the_content(); ?></div>
                <div class="custom-card-footer">
                    <span class="custom-card-date"><?php echo $date; ?></span>
                    <div>
                        <?php if(!empty($gal) && is_array($gal)): ?>
                            <button class="btn-download open-isl-gallery" style="margin-right: 5px;" data-gallery='<?php 
                                $imgs = array(); foreach($gal as $i){ $imgs[] = array('thumb'=>$i['sizes']['medium'],'full'=>$i['url']); }
                                echo htmlspecialchars(json_encode($imgs), ENT_QUOTES, 'UTF-8'); 
                            ?>'>Gallery</button>
                        <?php endif; ?>
                        
                        <?php if($f_url && count($video_urls) <= 1): ?>
                            <a href="<?php echo $f_url; ?>" class="btn-download" target="_blank">
                                <?php echo $btn_icon . $btn_text; ?>
                            </a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php endwhile; wp_reset_postdata(); endif; echo '</div>';
}
?>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
jQuery(document).ready(function($) {
    var hoverWait;

    // --- Tab Switching Logic ---
    function switchParentTab($trigger) {
        $('.tab-trigger').removeClass('active');
        $trigger.addClass('active');
        $('.media-pane').hide().removeClass('active');
        $('#' + $trigger.data('target')).fadeIn(300).addClass('active');
    }

    function switchSubTab($pill) {
        $pill.closest('.pub-sub-nav').find('.pub-pill').removeClass('active');
        $pill.addClass('active');
        $pill.closest('.media-pane').find('.sub-pane').hide().removeClass('active');
        $('#' + $pill.data('sub')).fadeIn(300).addClass('active');
    }

    // --- Hover Events ---
    $('.tab-trigger').on('mouseenter', function() {
        var $el = $(this);
        clearTimeout(hoverWait);
        hoverWait = setTimeout(function() { switchParentTab($el); }, 150);
    }).on('mouseleave', function() {
        clearTimeout(hoverWait);
    });

    $(document).on('mouseenter', '.pub-pill', function() {
        var $el = $(this);
        clearTimeout(hoverWait);
        hoverWait = setTimeout(function() { switchSubTab($el); }, 150);
    }).on('mouseleave', function() {
        clearTimeout(hoverWait);
    });

    // --- Search Logic ---
    $('#instant-media-search').on('keyup', function() {
        var searchTerm = $(this).val().toLowerCase();
        var $allItems = $('.media-post-group-item');
        if (searchTerm === "") { 
            $allItems.show(); 
            $('#search-status-text').text("Showing all results"); 
            return; 
        }
        var foundCount = 0;
        $allItems.each(function() {
            var title = $(this).attr('data-search-title') || "";
            var date = $(this).attr('data-search-date') || "";
            if (title.indexOf(searchTerm) > -1 || date.indexOf(searchTerm) > -1) { 
                $(this).show(); 
                foundCount++; 
            } else { 
                $(this).hide(); 
            }
        });
        $('#search-status-text').text("Found " + foundCount + " result(s)");
    });

    // --- Image Gallery Logic ---
    var currentGallery = []; 
    var currentIndex = 0;

    $(document).on('click', '.open-isl-gallery', function() {
        var rawData = $(this).attr('data-gallery');
        if(rawData) {
            currentGallery = JSON.parse(rawData); 
            currentIndex = 0;
            updateModal(); 
            $('#islOverlay').css('display', 'flex');
        }
    });

    function updateModal() {
        if(currentGallery.length > 0) {
            $('#islActiveImage').attr('src', currentGallery[currentIndex].full);
            var thumbs = '';
            currentGallery.forEach(function(img, idx) { 
                thumbs += '<img src="'+img.thumb+'" class="'+(idx==currentIndex?'active-thumb':'')+'" onclick="jumpTo('+idx+')">'; 
            });
            $('#islImageGrid').html(thumbs);
        }
    }

    window.jumpTo = function(idx) { currentIndex = idx; updateModal(); };
    $('#prevBtn').click(function() { currentIndex = (currentIndex > 0) ? currentIndex - 1 : currentGallery.length - 1; updateModal(); });
    $('#nextBtn').click(function() { currentIndex = (currentIndex < currentGallery.length - 1) ? currentIndex + 1 : 0; updateModal(); });
    $('#closeIslModal').click(function() { $('#islOverlay').hide(); });

    // --- Video Gallery Logic ---
    $(document).on('click', '.open-video-gallery', function() {
        var videos = JSON.parse($(this).attr('data-videos'));
        var html = '';
        videos.forEach(function(url) {
            var videoId = "";
            var regex = /(?:youtube\.com\/(?:[^\/]+\/.+\/|(?:v|e(?:mbed)?)\/|.*[?&]v=)|youtu\.be\/)([^"&?\/ ]{11})/i;
            var match = url.match(regex);
            if (match && match[1]) {
                videoId = match[1];
                html += '<div class="v-container-item" style="margin-bottom:30px; background:#000;">' +
                        '<iframe src="https://www.youtube-nocookie.com/embed/' + videoId + '?rel=0&modestbranding=1" ' +
                        'style="position:absolute; top:0; left:0; width:100%; height:100%;" ' +
                        'frameborder="0" allowfullscreen  referrerpolicy="strict-origin-when-cross-origin"></iframe>' +
                        '</div>';
            }
        });
        $('#videoContainer').html(html || '<p style="color:#fff;">No videos found.</p>');
        $('#videoGalleryModal').css('display', 'flex');
        $('body').css('overflow', 'hidden');
    });

    $('#closeVideoModal, #videoGalleryModal').click(function(e) {
        if (e.target !== this && e.target.id !== 'closeVideoModal') return;
        $('#videoGalleryModal').hide();
        $('#videoContainer').empty();
        $('body').css('overflow', 'auto');
    });
}); // End of jQuery Ready
</script>
<?php get_footer(); ?>