define(['jquery'], function($)
{
	return new function()
	{
		var self = this;
		self.run = function()
		{
			cartQty();
			shoppingCart();
		};

		var cartQty = function(){
			// Quantity increment/decrement button set
			$('.qty-btngroup').each(function() {
				var $this = $(this),
					$input = $this.children('input[type="text"]'),
					val = $input.val();
				$this.children('.plus').on('click', function() {
					$input.val( ++val );
				});
				$this.children('.minus').on('click', function() {
					if ( val == 0 ) return;
					$input.val( --val );
				});
			});
			
			$('.my-cart .remove-item').on('click', function(e) {
				e.preventDefault();
				$(this).closest('tr').fadeOut(400, function() {
					$(this).remove();
				});
			});
		};

		var shoppingCart = function(){
			// Shopping cart drop down
			$(document).on('click','.left .button-dialog',function(e){
				e.preventDefault();
				$('.header-cart .relative').hoverIntent({
					over: function() {
						$(this).children('.cart-items').slideDown(300);
					},
					out: function() {
						$(this).children('.cart-items').slideUp(300);
					}
				});
			});
		};

	};
});