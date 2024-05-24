<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,minimum-scale=1">
<title>Create News</title>
<link href="style.css" rel="stylesheet" type="text/css">
<style> html, body {
background-color:white} * {box-sizing: border-box;
font-family: system-ui, "Segoe UI", Roboto, Helvetica, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
font-size: 16px;
}
body {
background-color: #FFFFFF; margin: 0;
}
.header { display: flex;
align-items: center;
 
justify-content: center; padding: 80px 0;
}
.header .title { margin: 0;
padding: 0; color: #3f4754; font-size: 34px;
}
.header .title::after { content: " ";
display: inline-block; width: 50%;
transform: translate(50%, 0); border-bottom: 4px solid #dee2e7;
}
.items { display: flex;
flex-flow: column; align-items: flex-start; max-width: 850px; width: 100%;
margin: 0 auto;
padding: 0 15px;
}
.items .item { display: flex;
text-decoration: none; margin-bottom: 40px;
}
.items .item .image { border-radius: 15px; max-width: 300px;
}
 
.items .item .details { padding-left: 30px;
}
.items .item .details .title { margin: 0;
padding: 10px 0;
color: #556071; font-size: 24px;
}
.items .item .details .date { display: block;
color: #b3bac6; font-size: 14px; font-weight: 500; padding-top: 10px;
}
.items .item .details .description { color: #8792a5;
font-size: 16px; margin: 0;
padding: 5px 0;
}
.create-news { display: flex;
flex-flow: column; width: 100%;
max-width: 500px; margin: 50px auto;
box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); border-radius: 10px;
overflow: hidden; background-color: #fff;
}
.create-news h1 {
 
margin: 0;
padding: 25px 20px; font-size: 20px;
font-weight: 500; color: #3f4754;
border-bottom: 1px solid #eff2f5;
}
.create-news form { display: flex;
flex-flow: column; align-items: flex-start; padding: 20px;
}
.create-news form label { font-weight: 500;
font-size: 14px; color: #74787c;
padding-bottom: 10px;
}
.create-news form label .required { color: #ff1212;
margin-right: 5px;
}
.create-news form input, .create-news form textarea { margin-bottom: 20px;
width: 100%; padding: 10px;
border: 1px solid #dee1e6; border-radius: 4px;
font-size: 16px;
}
.create-news form input:focus, .create-news form textarea:focus { outline: none;
border-color: #3f4754;
 
}
.create-news form input::placeholder, .create-news form textarea::placeholder { color: #a2a4a8;
}
.create-news form button { appearance: none; padding: 10px 15px; margin-top: 5px;
border: none; border-radius: 4px; font-size: 14px; font-weight: 500;
background-color: #167cdb; color: #FFFFFF;
cursor: pointer;
box-shadow: 0 0 7px rgba(0, 0, 0, 0.15); transition: background-color ease 0.2s;
}
.create-news form button:hover { background-color: #292e37;
}
.create-news form .msg { margin: 0;
padding: 5px 0 20px 0; font-size: 14px;
font-weight: 500;
}
.create-news form .msg.success { color: #07b94c;
}
.create-news form .msg.error { color: #be2c2c;
}
</style>
 
</head>
<body>
<div class="create-news">
<h1>RSS Feed News</h1>
<form action="add_feeds.php" method="post" >
<label for="title"><span class="required">*</span>Title</label>
<input type="text" name="title" id="title" placeholder="Title" required>
<label for="description"><span class="required">*</span>Description</label>
<textarea name="description" id="description" placeholder="Description" required></textarea>
<label for="link"><span class="required">*</span>Link</label>
<input type="url" name="link" id="link" placeholder="https://example.com/article/lorum-ipsum" required>
<label for="img">Featured Image</label>
<input type="file" name="img" id="img" accept="image/*">
<label for="date"><spanclass="required">*</span>Publish Date</label>
<input type="datetime-local" name="date" id="date" value="<?=date('Y-m-d H:i')?>" required>
<?php if (isset($msg)): ?>
<?=$msg?>
<?php endif; ?>
<button type="submit">Create</button>
</form>
</div>
</body>
</html>

