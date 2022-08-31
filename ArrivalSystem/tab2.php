<html>
<head>
<title>Savory Restaurant Admin Site</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script> 


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet"/>

<style type="text/css">

body {
  display: flex;
  min-height: 100vh;
  justify-content: center;
  align-items: center;
  flex-direction: column;
}

select {
  margin-bottom: 1em;
  padding: .25em;
  border: 0;
  border-bottom: 2px solid currentcolor;
  font-weight: bold;
  letter-spacing: .15em;
  border-radius: 0;
}
select:focus, select:active {
  outline: 0;
  border-bottom-color: red;
}

.images {
  width: 300px;
  height: 300px;
  display: flex;
  justify-content: center;
  align-items: center;
  border-radius: 3px 3px 3px 3px;
  overflow: hidden;
  box-shadow: 0 20px 15px -15px rgba(0, 0, 0, 0.5);
}
.images img,
.images .loader,
.images .no-selection {
  display: none;
  letter-spacing: .15em;
  font-weight: bold;
}
.images[data-selected=""]:not(.loading) {
  background: #eee;
}
.images[data-selected=""]:not(.loading) .no-selection {
  display: block;
}
.images.loading {
  background: #eee;
}
.images.loading .loader {
  display: block;
  -webkit-animation: loading 1.5s linear;
          animation: loading 1.5s linear;
}

.images[data-selected="1"] img[data-image="1"] {
  display: block;
}

.images[data-selected="2"] img[data-image="2"] {
  display: block;
}

.images[data-selected="3"] img[data-image="3"] {
  display: block;
}

.images[data-selected="4"] img[data-image="4"] {
  display: block;
}

.images[data-selected="5"] img[data-image="5"] {
  display: block;
}

@-webkit-keyframes loading {
  to {
    letter-spacing: .25em;
  }
}

@keyframes loading {
  to {
    letter-spacing: .25em;
  }
}


</style>

</head>
<body>


<select id="selectbox" data-selected="">
  <option value="" selected="selected" disabled="disabled">Select an image</option>
  <option value="1">Ocean Wall</option>
  <option value="2">Skate Park</option>
  <option value="3">Mountain View</option>
  <option value="4">Cityscape</option>
  <option value="5">Workshop</option>
</select>

<div class="images" data-selected="">
  <span class="loader">loading image...</span>
  <span class="no-selection">no image selected</span>
  <img src="https://picsum.photos/300/300/?image=280" data-image="1" alt="Ocean Wall" title="Ocean Wall" />
  <img src="https://picsum.photos/300/300/?image=281" data-image="2" alt="Skate Park" title="Skate Park" />
  <img src="https://picsum.photos/300/300/?image=282" data-image="3" alt="Mountain View" title="Mountain View" />
  <img src="https://picsum.photos/300/300/?image=283" data-image="4" alt="Cityscape" title="Cityscape" />
  <img src="https://picsum.photos/300/300/?image=284" data-image="5" alt="Workshop" title="Workshop" />
</div>

<script src="js/tab2.js"></script>

</body>
</html>



