

	<div class="details">
		<div class="container">
			<div class="h2_content">
				<h2><?=htmlspecialchars($this->post->title)?></h2>
			</div>
			<div class="det_text">
				<p><?=nl2br(htmlspecialchars($this->post->small_desc))?></p>
			</div>
			<div class="det_text">
				<p><?=nl2br(htmlspecialchars($this->post->content))?></p>
			</div>
			<ul class="links">
				<li><i class="date"> </i><span class="icon_text"><?=$this->post->date?></span></li>
				<li><a href="#"><i class="admin"> </i><span class="icon_text"><?=$this->post->author?></span></a></li>
			</ul>
			
           
		</div>
	</div>
	
