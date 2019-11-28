<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="dash.css">
    <link rel="stylesheet" type="text/css" href="responsive.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>F22-DASHBOARD</title>
</head>
<body>
        <!-- font-family: "Ubuntu-Italic", "Lucida Sans", helvetica, sans; -->
 
    <div class="flexIconsContainer">
        <header><a href="#"><img src="icons/menu.png" alt="menu"></a></header>
            <div class="socialIcons">
                <a href="#"><img src="icons/whatsapp.png" alt="whatsapp"></a>
                <a href="#"><img src="icons/gmail.png" alt="gmail"/></a>
                <a href="#"><img src="icons/skype.png" alt="skype"/></a>
                <a href="#"><img src="icons/slack.png" alt="slack"/></a>
                <a href="#"><img src="icons/add.png" alt="add"/></a>
            </div>
    </div>
    <div class="flexInboxContainer">
            <header><p id="inbox">Inbox</p><a href="#"><img id="adduser" src="icons/user.png" alt="add"></a></header>
            <ul class="inboxList">
                <li><a href="">All</a><p class="badgeNo">89</p></li>
                <li class="activedark"><a href="" >Messages</a><p class="badgeNo">11</p></li>
                <li><a href="">Unread</a><p class="badgeNo">4</p></li>
                <li><a href="">Important</a><p class="badgeNo">1</p></li>
            </ul>
            <ul class="inboxList">
                <li><a href="">Teams</a><p class="badgeNo">2</p></li>
                <li><a href="" >Groups</a><p class="badgeNo">4</p></li>
                <li><a href="">Channels</a><p class="badgeNo">2</p></li>                
                <li><a href="">Locations</a></li>
                <li><a href="">Media</a><p class="badgeNo">88</p></li>
            </ul>
            <ul class="inboxList">
                <li><a href="">Help</a></li>
                <li><a href="">Settings</a></li>
            </ul>

    </div>
    <div class="flexContactsContainer">
            <header>
                <div class="search-container">
                    <form action="/action_page.php">
                      <input type="text" placeholder="Search.." name="search">
                      <button type="submit"><i class="fa fa-search"></i></button>
                    </form>
                  </div>
            </header>
            <div class="contact">
                <img src="avatars/avt1.jpg" class="userImg">
                <div class="messages">
                    <h4>Michelle</h4>
                    <p>can you send me the client pre..</p>
                </div>
                <div class="moreBtn"><h2>...</h2><br><p>1min</p></div>
            </div>
            <div class="contact">
                    <img src="avatars/avt2.jpg" class="userImg">
                    <div class="messages">
                        <h4>Michelle</h4>
                        <p>can you send me the client pre..</p>
                    </div>
                    <div class="moreBtn"><h2>...</h2><br><p>1min</p></div>
                </div>
            <div class="contact active">
                    <img src="avatars/avatar.jpg" class="userImg">
                    <div class="messages">
                        <h4>Shahul</h4>
                        <p>Typing..</p>
                    </div>
                    <div class="moreBtn"><h2>...</h2><br><p>10min</p></div>
                </div>
            <div class="contact">
                    <img src="avatars/avt4.jpg" class="userImg">
                    <div class="messages">
                        <h4>Justin Engel</h4>
                        <p>can you look after my carebears later..</p>
                    </div>
                    <div class="moreBtn"><h2>...</h2><br><p>12min</p></div>
                </div>
            <div class="contact">
                    <img src="avatars/avt5.jpg" class="userImg">
                    <div class="messages">
                        <h4>Emile</h4>
                        <p>Tell matt i'm going to be late for work.</p>
                    </div>
                    <div class="moreBtn"><h2>...</h2><br><p>51min</p></div>
                </div>
            <div class="contact">
                    <img src="avatars/avt6.jpg" class="userImg">
                    <div class="messages">
                        <h4>Grant</h4>
                        <p>Meeting in 45min</p>
                    </div>
                    <div class="moreBtn"><h2>...</h2><br><p>1hour</p></div>
                </div>
    </div>
    <div class="flexChatContainer">
        <header class="chatHeader">
            <div class="chattingUser">
                <h3 class="userName">Shahul </h3><p> is typing..</p>
            </div>
            <div class="chatModules">
                <a href="#" title="video call"><img src="icons/videocall.png"/></a>
                <a href="#" title="call"><img src="icons/call.png"/></a>
                <a href="#" title="Star"><img src="icons/star.png"/></a>
                
            </div>
        </header>

        <div class="chats">
            <div class="chat">
                <div class="leftImgAvatar">
                    <img src="avatars/avt3.jpg" alt="matt">
                    <p>14:32</p>
                </div>
                
                <div class="chatMessage whitechat">
                    jo, What's a nice chilled movie i can go watch with my mom?
                </div>
                
             </div>

            <div class="chat">
                <div class="rightImgAvatar">
                    <img src="avatars/avatar.jpg" alt="vs">
                    <p>14:32</p>
                </div>
                <div class="chatMessage greenChat">
                    well theres's a few showing at the moment.do you wmind a romance drama type of movie?
                </div>
            </div>
    
            <div class="chat">
                <div class="leftImgAvatar">
                        <img src="avatars/avt3.jpg" alt="matt">
                    <p>14:36</p>
                </div>
                <div class="chatMessage whitechat">
                    Yeah man that should be fine.
                </div>
            </div>
              
            <div class="chat">
                <div class="rightImgAvatar">
                        <img src="avatars/avatar.jpg" alt="vs">
                    <p>14:37</p>
                </div>
                <div class="chatMessage greenChat">
                    okay great.you should check out 50 shades.Don't watch the trailer-it will spoil the movie for you.it has some adorable moments.
                </div>
            </div>

            <div class="chat">
                <div class="rightImgAvatar">
                        <img src="avatars/avatar.jpg" alt="vs">
                    <p>14:32</p>
                </div>
                <div class="chatMessage greenChat">
                    <img src="ShadesOfGrey.jpg" alt="camera">
                    <p> <span> 50 Shades of Grey </span>/ Romance  </p>
                    <p>Fifty shades of grey is a 2011 erotic romance novel by british author E.L James.it is the first installment in the the first fifty shades triology that traces the deepening...</p>
                    <button>View</button>
                </div>
            </div>
        </div>

        <footer class="chatFooter">
            <a href="#"><img src="icons/link.png" alt="link"></a>
            <input type="text" name="chatText" placeholder="Type your message..">
            <a href="#"><img src="icons/happy.png" alt="emoji" ></a>
            <a href="#"><img src="icons/telegram.png" title="send"></a>
        </footer>
    </div>
    <div class="flexInfoContainer">
            <header class="chatHeader">
                    
                    <div class="chatModules bellLeft">
                            <a href="#" title="notification"><img src="icons/bell.png"/></a>
                    </div>

                    <div class="chattingUser box">
                            <h3 class="userName"><a href="logout.php">Logout</a></h3>
                        </div>
                </header>
                <div class="infoEvent" >
                    <img class="gmailIcon" src="icons/gmail.png">
                    <span class="leftMenu">...</span>
                </div>
                <div class="aboutContact" >
                    <img src="avatar.jpg" alt="User DP">
                    <h3>Shahul Hameed V.S</h3>
                    <p>Rayapettah,Chennai.</p>
                </div>
                <div>
                    <ul class="infoContact">
                        <li>NickName: <span class="infoRight">Shaul</span></li>
                        <li>Tel: <span class="infoRight">021 88 237 8890</span></li>
                        <li>Date of Birth: <span class="infoRight">sep 28th 1998</span></li>
                        <li>Gender: <span class="infoRight">Male</span></li>
                        <li>Language: <span class="infoRight">English,Hindi</span></li>
                    </ul>
                    </div>

    </div>
</body>
</html>