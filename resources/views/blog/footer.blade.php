<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<!-- Use downloaded version of Bootstrap -->
<script src="/js/js/bootstrap.min.js"></script>
<script src="/js/js/tinymce/js/tinymce/jquery.tinymce.min.js"></script>
<script src="https://cloud.tinymce.com/stable/tinymce.min.js?apiKey=9xi48s3ye46qrysu08l3fp1qra0ix9im11gdqk6h4swuevmq"></script>
<script>
	$(document).ready(function () {
		tinymce.init({
		  selector: 'textarea',
		  height: 500,
		  menubar: true,
		  entity_encoding: "raw",
		  cleanup: false,
		  verify_html: false,
		  plugins: [
		    'advlist autolink lists link image charmap print preview anchor',
		    'searchreplace visualblocks code fullscreen',
		    'insertdatetime media table contextmenu paste code',
		    'codesample'
		  ],
			toolbar: 'undo redo | insert | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | codesample',
			content_css: [
		    '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
		    '//www.tinymce.com/css/codepen.min.css'],
		  codesample_languages: [
		        {text: 'HTML/XML', value: 'markup'},
		        {text: 'JavaScript', value: 'javascript'},
		        {text: 'CSS', value: 'css'},
		        {text: 'PHP', value: 'php'},
		        {text: 'Ruby', value: 'ruby'},
		        {text: 'Python', value: 'python'},
		        {text: 'Java', value: 'java'},
		        {text: 'C', value: 'c'},
		        {text: 'C#', value: 'csharp'},
		        {text: 'C++', value: 'cpp'}
		    	],

	});
});
</script>