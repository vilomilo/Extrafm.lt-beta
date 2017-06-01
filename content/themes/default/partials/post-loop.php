<?php foreach($posts as $post): ?>

<?php $post_description = preg_replace('/^\s+|\n|\r|\s+$/m', '', strip_tags($post->body)); ?>


								<div class="article spacearticle newarticle">
                                       <div class="romotion">
		 <a  href="<?= ($settings->enable_https) ? secure_url('straipsnis') : URL::to('straipsnis') ?><?= '/' . $post->slug ?>">
                                             <div class="articlemask"><i class="fa fa-eye marker" aria-hidden="true"></i></div>
                                             <img src="<?= ImageHandler::getImage($post->image, 'medium')  ?>" class="articleimage">
                                             <h1 class='articletext'><?= $post->title; ?></h1>
                                             <h2 class='articlesubtext'><?php if(strlen($post_description) > 90){ echo substr($post_description, 0, 90) . '...'; } else { echo $post->description; } ?></h2>
                                          </a>
		
 </div>
 </div>

<?php endforeach; ?>

                                         
                                      