barba.init({
	transitions: [{
		name: '',
		leave: function(data){
			var done = this.async();
			document.body.classList.add('loading');
			setTimeout(function(){
				done();
			},400);
		},
		enter:
		function(data){
			var done = this.async();
			done();
			setTimeout(function(){
				document.body.classList.remove('loading');
				window.location.reload();
			},400);
		}
	}]
});