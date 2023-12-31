<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Chatbot</title>
	 <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,400,1,0" />
    
    <script src="response.js" defer></script>
    <script src="app.js" defer></script>
    <style>
      @import url("https://fonts.googleapis.com/css2?family=Fira+Code:wght@400;500;600&family=Poppins:wght@200;300&display=swap");
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Poppins", sans-serif;
}
.container {
  --light-color: #fff;
  height: 520px;
  width: 480px;
  background: var(--light-color);
  position: fixed;
  bottom: 50px;
  right: 10px;
  box-shadow: 0px 0px 15px 0px black;
}
.container.collapse{
	height: 40px;
	width: 190px;
	display: flex;
	align-items: center;
	overflow: hidden;
	border: none;
}
.chat-header {
  height: 60px;
  display: flex;
  align-items: center;
  padding: 0px 30px;
  background-color: #87cbb9;
  color: var(--light-color);
  font-size: 1.5rem;
  font-weight: 500;
  cursor: pointer;
}

.chat-header .title {
  padding-left: 10px;
}
.chat-body {
  height: 400px;
  display: flex;
  flex-direction: column;
  padding: 8px 10px;
  align-items: flex-end;
  overflow: hidden;
  overflow-y: auto;
}

.chat-input {
  height: 48px;
  display: flex;
  align-items: center;
  border-top: 1px solid #ccc;
}
.input-sec {
  flex: 9;
}
.send {
  flex: 1;
  padding-right: 4px;
}
#txtInput {
  line-height: 30px;
  padding: 8px 10px;
  border: none;
  outline: none;
  caret-color: black;
  font-size: 1rem;
  width: 100%;
}
.chatbot-message,
.user-message {
  padding: 8px;
  background: #ccc;
  margin: 5px;
  width: max-content;
  border-radius: 10px 3px 10px 10px;
}
.user-message{
  margin-top: 30px;
	transform: translate(1%);
  align-self: flex-end;
}
.chatbot-message {
  background: #87cbb9;
  color: var(--light-color);
  align-self: flex-start;
  border-radius: 10px 10px 3px 10px;
}
.bot-response-container{
	display: flex;
	height: 45px;
	align-items: center;
	justify-content: flex-start;
	width: 95%;
	word-wrap: break-word;
}
    </style>
  </head>
  <body>
	    <div class="container collapse">
      <div class="chat-header">
        <div class="title">Chatbot</div>
      </div>
      <div class="chat-body"></div>
      <div class="chat-input">
        <div class="input-sec">
          <input type="text" id="txtInput" placeholder="Say 'Hello' " autofocus />
        </div>
        <div class="send">
			<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAAAXNSR0IArs4c6QAAAbhJREFUSEvl1s9KFmEUBvCfYC6rZdqmSGjTomuwsAuoRdSqf9A26A4USsRAXVWrqIggqrUKXUBJLYtqJ7RK3IQLI+XAW8jwzvfNO9+IgWc1MDPnOf+e85wh+2RD+4TrvwIewyhW97Ia1YxP4TOGE/A9vMZ210FUgcfxtQLyBTN4it9dBZDr8Q8cywCsYQ4PsTloADng57jSw/FPLGIeG20DyAHfxOMGDn/hEWYRVSqyHHCuz72cbqX+xyB+a4pex+O6Pvfy+wdvMY2P/QKoA57EHVyg1ZJZSi1YqQug3+Y6juu4hpP9ssi8f4/7eFPdBf2A//qK787hBi7iUGEQsQuiBc92Oyz04Siu4jbOFP58GS/jn6YZ7/Z/JAHfwtlC4NgPL0qAI8CJ1O9LGCkE/I4pPGla6hiuGKwYsDbD9QHB76BZ0O2f1ZX6PO4iaNWmHe8S4HIpnQZZIJFhZNrTulqZQZOQzqBNIxtUJEJMQipDMousjSyuJ1lcQDy3stJD4EGSwpDEgSx3c1WlLU6h2Ldx+oQEdmJV4BPp5opj71OixKsqB7tAzpX6NA4jlGXPrM1y6CSYgwe8AxqEUh/BU+T8AAAAAElFTkSuQmCC"/>        </div>
      </div>
    </div>
  </body>
</html>