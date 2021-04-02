<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="jumbotron">
    <form action="{{ url('/addUser') }}" method="post" enctype="multipart/form-data">
    @csrf
        <div class="form-group">
            <label>Name: </label>
            <input type="text" class="form-control" name="username">
        </div>
        <div class="form-group">
            <label for="">Surname: </label>
            <input type="text" class="form-control" name="surname">
        </div>
        <div class="form-group">
            <label for="">Email: </label>
            <input type="email" class="form-control" name="email">
        </div>
        <label for="">Profile Image: </label>
        <div class="input-group">
            <div class="custom-file">
                <input type="file" class="custom-file-input" name="image">
                <label class="custom-file-label">Choose file</label>
            </div>
        </div>
        <br>
        <button type="submit" name="submit" class="btn btn-primary">Save</button>
    </div>
    </form>
</div>
</body>
</html> -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    @import url("https://fonts.googleapis.com/css?family=Fjalla+One&display=swap");
* {
  margin: 0;
  padding: 0;
}

body {
  background: url("https://s3-us-west-2.amazonaws.com/s.cdpn.io/38816/image-from-rawpixel-id-2210775-jpeg.jpg") center center no-repeat;
  background-size: cover;
  width: 100vw;
  height: 100vh;
  display: grid;
  align-items: center;
  justify-items: center;
}

.contact-us {
  background: #f8f4e5;
  padding: 50px 100px;
  border: 2px solid black;
  box-shadow: 15px 15px 1px #ffa580, 15px 15px 1px 2px black;
}

input {
  display: block;
  width: 100%;
  font-size: 14pt;
  line-height: 28pt;
  font-family: "Fjalla One";
  margin-bottom: 28pt;
  border: none;
  border-bottom: 5px solid black;
  background: #f8f4e5;
  min-width: 250px;
  padding-left: 5px;
  outline: none;
  color: black;
}

input:focus {
  border-bottom: 5px solid #ffa580;
}

button {
  display: block;
  margin: 0 auto;
  line-height: 28pt;
  padding: 0 20px;
  background: #ffa580;
  letter-spacing: 2px;
  transition: 0.2s all ease-in-out;
  outline: none;
  border: 1px solid black;
  box-shadow: 3px 3px 1px #95a4ff, 3px 3px 1px 1px black;
}
button:hover {
  background: black;
  color: white;
  border: 1px solid black;
}

::selection {
  background: #ffc8ff;
}

input:-webkit-autofill,
input:-webkit-autofill:hover,
input:-webkit-autofill:focus {
  border-bottom: 5px solid #95a4ff;
  -webkit-text-fill-color: #2A293E;
  /* -webkit-box-shadow: 0 0 0px 1000px #f8f4e5 inset; */
  transition: background-color 5000s ease-in-out 0s;
}
</style>
<body>
<div class="contact-us">
  <form action="{{ route('addUser') }}" method="POST" enctype="multipart/form-data">
  @csrf
    <input name="username" placeholder="Name" required="" type="text" />
    <input name="surname" placeholder="Surname" required="" type="text" />
    <input name="email" placeholder="Email" type="email" />
    <input name="image" placeholder="choose image" type="file" value="Upload Image" />
    <button type="submit" name="submit">SEND</button>
  </form>
</div>
</body>
</html>