

// Below is an example of function and its initialization
var AppCustom = function() {
	var showAppName = function() {
		console.log( 'Operandi Tech' );
	};

	return {
		init: function() {
			showAppName();
		}
	}
}();

// Initialize AppCustom when page loads
jQuery( function() {
	AppCustom.init();
});
