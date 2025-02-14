<?php 
include './includes/header.php'; ?>
	<section class="single-product">
		<div class="container">
			<div class="product-details">
				<div class="product-gallery">
					<img src="product-main-image.jpg" alt="Digital Art Pack" class="main-image">
					<div class="thumbnail-grid">
						<img src="thumbnail1.jpg" alt="Thumbnail 1" class="thumbnail">
						<img src="thumbnail2.jpg" alt="Thumbnail 2" class="thumbnail">
						<img src="thumbnail3.jpg" alt="Thumbnail 3" class="thumbnail">
						<img src="thumbnail4.jpg" alt="Thumbnail 4" class="thumbnail">
					</div>
				</div>
				<div class="product-info">
					<h1 class="product-title">Digital Art Pack</h1>
					<div class="product-price">$49.99</div>
					<div class="product-rating">
						<div class="stars">★★★★★</div>
						<span class="rating-count">(128 reviews)</span>
					</div>
					<p class="product-description">
						A comprehensive collection of 50+ high-resolution digital artworks perfect for your creative projects. 
						Each piece is carefully crafted to provide maximum flexibility and quality for your designs.
					</p>
					<button class="add-to-cart">
						<i class="fas fa-shopping-cart"></i>
						Add to Cart
					</button>
				</div>
			</div>

			<div class="product-tabs">
				<div class="tabs">
					<button class="tab-btn active" data-tab="description">Description</button>
					<button class="tab-btn" data-tab="specifications">Specifications</button>
					<button class="tab-btn" data-tab="reviews">Reviews</button>
				</div>
				<div id="description" class="tab-content" style="display: block;">
					<h3>Product Description</h3>
					<p>A comprehensive collection of 50+ high-resolution digital artworks perfect for your creative projects. Each piece is carefully crafted to provide maximum flexibility and quality for your designs.</p>
					<ul style="margin-top: 1rem; margin-left: 1.5rem;">
						<li>High-resolution artwork (4K resolution)</li>
						<li>Multiple file formats included (PSD, AI, PNG, JPG)</li>
						<li>Commercial license included</li>
						<li>Lifetime access to updates</li>
					</ul>
				</div>
				<div id="specifications" class="tab-content" style="display: none;">
					<h3>Technical Specifications</h3>
					<ul style="margin-top: 1rem; margin-left: 1.5rem;">
						<li>File Format: PSD, AI, PNG, JPG</li>
						<li>Resolution: 4K (3840 x 2160px)</li>
						<li>Color Mode: RGB</li>
						<li>File Size: 2.5GB</li>
					</ul>
				</div>
				<div id="reviews" class="tab-content" style="display: none;">
					<h3>Customer Reviews</h3>
					<div class="review-summary" style="margin-top: 1rem;">
						<div class="stars">★★★★★</div>
						<p>4.9 out of 5 based on 128 reviews</p>
					</div>
				</div>
			</div>
		</div>
	</section>
<?php include './includes/footer.php';
?>
