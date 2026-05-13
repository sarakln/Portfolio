<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Portfolio | Sara Kalan</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="layout-container">
    <aside class="sidebar">
        <div class="folder" onclick="openWindow('profile')">
            <img src="https://cdn-icons-png.flaticon.com/512/3767/3767084.png" alt="Profile">
            <span>profile</span>
        </div>
        <div class="folder" onclick="openWindow('about')">
            <img src="https://cdn-icons-png.flaticon.com/512/3767/3767084.png" alt="About">
            <span>about</span>
        </div>
        <div class="folder" onclick="openWindow('skills')">
            <img src="https://cdn-icons-png.flaticon.com/512/3767/3767084.png" alt="Skills">
            <span>skills</span>
        </div>
        <div class="folder" onclick="openWindow('works')">
            <img src="https://cdn-icons-png.flaticon.com/512/3767/3767084.png" alt="Works">
            <span>works</span>
        </div>
        <div class="folder" onclick="openWindow('contact')">
            <img src="https://cdn-icons-png.flaticon.com/512/3767/3767084.png" alt="Contact">
            <span>contact</span>
        </div>
    </aside>

    <div class="background-decorations" style="position: fixed; top: 0; left: 0; width: 100%; height: 100%; z-index: -1; pointer-events: none; user-select: none;">
    
    <h1 style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); font-size: 15vw; font-family: 'Courier New', Courier, monospace; font-weight: 900; color: rgba(120, 134, 107, 0.15); letter-spacing: 30px; margin: 0; white-space: nowrap;">
        PORTFOLIO
    </h1>

    <img src="https://cdn-icons-png.flaticon.com/512/1067/1067256.png" class="bg-sticker" 
         style="position: absolute; top: 12%; left: 18%; width: 75px; transform: rotate(-20deg); opacity: 0.6;">

    <img src="https://cdn-icons-png.flaticon.com/512/2888/2888698.png" class="bg-sticker" 
         style="position: absolute; bottom: 15%; left: 12%; width: 85px; transform: rotate(15deg); opacity: 0.6;">

    <img src="https://cdn-icons-png.flaticon.com/512/4712/4712035.png" class="bg-sticker" 
         style="position: absolute; top: 22%; right: 16%; width: 90px; transform: rotate(12deg); opacity: 0.6;">

    <img src="https://cdn-icons-png.flaticon.com/512/1157/1157109.png" class="bg-sticker" 
         style="position: absolute; bottom: 12%; right: 22%; width: 80px; transform: rotate(-10deg); opacity: 0.6;">

    <img src="https://cdn-icons-png.flaticon.com/512/2721/2721620.png" class="bg-sticker" 
         style="position: absolute; top: 55%; left: 22%; width: 75px; transform: rotate(-15deg); opacity: 0.5;">
</div>

<style>
    
    .bg-sticker {
        filter: drop-shadow(4px 4px 2px rgba(0,0,0,0.15));
        image-rendering: pixelated; 
    }
</style>
    <div class="folder" onclick="openWindow('admin')" style="position: absolute; top: 40px; right: 40px; z-index: 10; display: flex; flex-direction: column; align-items: center; cursor: pointer;">
        <img src="https://cdn-icons-png.flaticon.com/512/2942/2942813.png" alt="Admin" style="width: 60px; filter: drop-shadow(3px 3px 0px rgba(0,0,0,0.15));">
        <span style="margin-top: 8px; background-color: #d97736; color: white; padding: 3px 8px; border-radius: 4px; font-weight: bold; font-family: 'Courier New', monospace; font-size: 14px; box-shadow: 2px 2px 0px rgba(0,0,0,0.2);">admin</span>
    </div>

    <main class="content-area">
        
    <div id="window-profile" class="window active">
            <div class="window-header">
                <span>C:\PORTFOLIO\profile</span>
                <button class="close-btn" onclick="closeWindow('profile')">X</button>
            </div>
            <div class="window-content profile-content">
                <img src="photo.jpeg" alt="Profil Fotoğrafı" class="avatar">
                <div class="info">
                    <h2>hi! i'm<br><span class="highlight">SARA KALAN</span></h2>
                    <p>I'M A SOFTWARE ENGINEER</p>
                    
                    <i style="display: block; margin-top: 10px; font-size: 13px; color: #78866b; line-height: 1.5;">
                        "Architecting intelligence line by line—where data meets vision and code becomes a living ecosystem."
                    </i>
                    
                </div>
            </div>
        </div>

<div id="window-about" class="window" style="display:none; width: 740px;"> 
            
            <div class="window-header">
                <span>C:\PORTFOLIO\about_sara.exe</span>
                <button class="close-btn" onclick="closeWindow('about')">X</button>
            </div>
            
            <div class="window-content" style="padding: 25px 20px; display: flex; align-items: center; gap: 15px; background-color: #fdfaf3; overflow: hidden;">
                
                
                <div style="flex-shrink: 0;">
                    <img src="avatar5.png" alt="Sara Pixel Avatar" 
                         style="width: 250px; display: block; image-rendering: pixelated; filter: drop-shadow(5px 5px 0px rgba(120, 134, 107, 0.2)); margin-bottom: -15px;">
                </div>

                
                <div style="position: relative; 
                            background-color: #fffcf5; 
                            background-image: repeating-linear-gradient(transparent, transparent 27px, #e8e3d3 28px); 
                            padding: 30px 20px 20px 20px; 
                            border: 1px solid #d4cbb3; 
                            box-shadow: 6px 6px 0px rgba(120, 134, 107, 0.15); 
                            border-radius: 2px; 
                            transform: rotate(2deg);
                            flex-grow: 1;">
                    
                   
                    <svg viewBox="0 0 40 80" width="35" height="70" xmlns="http://www.w3.org/2000/svg" 
                         style="position: absolute; top: -35px; left: 15px; transform: rotate(-5deg); filter: drop-shadow(2px 3px 2px rgba(0,0,0,0.3));">
                        <path d="M 25 15 L 25 60 A 10 10 0 0 1 5 60 L 5 20 A 7 7 0 0 1 19 20 L 19 55 A 4 4 0 0 1 11 55 L 11 25" 
                              fill="none" stroke="#d97736" stroke-width="4.5" stroke-linecap="round"/>
                    </svg>

                    
                    <div style="font-family: 'Courier New', Courier, monospace; font-size: 14px; line-height: 28px; color: #4a5441;">
                        
                        <h3 style="margin-top: -10px; color: #d97736; font-size: 24px; margin-bottom: 5px; font-weight: 900;">Hello there! ✨</h3>
                        
                        <p style="margin-top: 0; margin-bottom: 0;">
                            I'm <b style="color: #d97736;">Sara</b>. I build the bridge between low-level hardware logic and high-level creative design. I code across a wide spectrum—from complex data analysis with Python and exploring computer vision algorithms, to simply designing smooth, user-friendly interfaces.
                        </p>
                        
                        <p style="margin-top: 0; margin-bottom: 0;">
                            For me, software isn't just about building a working system; it's the art of solving problems elegantly. I love blending AI tools with creative processes, always asking with every new line of code: <br> 
                            <span style="font-weight: bold; color: #78866b; font-style: italic;">"How can I make this smarter and more meaningful?"</span>
                        </p>
                        
                    </div>
                </div>

            </div>
        </div>

        <div id="window-skills" class="window" style="display:none; width: 680px;">
            <div class="window-header">
                <span>C:\PORTFOLIO\my_skills.exe</span>
                <button class="close-btn" onclick="closeWindow('skills')">X</button>
            </div>
            
            <div class="window-content" style="padding: 30px; background-color: #fdfaf3; overflow-y: auto; max-height: 550px;">
                
                <div style="text-align: center; margin-bottom: 25px;">
                    <h3 style="margin: 0; color: #d97736; font-size: 24px; font-weight: 900;">My Tech Stack ✨</h3>
                    <p style="margin: 5px 0 0 0; color: #78866b; font-family: 'Courier New', monospace; font-size: 13px;">
                        Initializing skill modules... [OK]
                    </p>
                </div>

                <style>
                    .skills-container {
                        display: grid;
                        grid-template-columns: repeat(3, 1fr); 
                        gap: 15px;
                    }
                    .s-card {
                        background: #fffcf5;
                        border: 2px dashed #d4cbb3;
                        border-radius: 10px;
                        padding: 15px;
                        text-align: center;
                        box-shadow: 4px 4px 0px rgba(120, 134, 107, 0.1);
                        transition: all 0.3s ease;
                    }
                    .s-card:hover {
                        transform: translateY(-5px);
                        border-color: #d97736;
                        box-shadow: 6px 6px 0px rgba(217, 119, 54, 0.2);
                    }
                    .s-icon {
                        width: 40px;
                        height: 40px;
                        margin-bottom: 8px;
                        object-fit: contain;
                    }
                    .s-name {
                        font-family: 'Courier New', monospace;
                        font-weight: 900;
                        font-size: 13px;
                        color: #4a5441;
                    }
                    .s-stars {
                        color: #d97736;
                        font-size: 11px;
                        margin-top: 5px;
                        letter-spacing: 1px;
                    }
                </style>

                <div class="skills-container">
                    <div class="s-card">
                        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/python/python-original.svg" class="s-icon">
                        <div class="s-name">Python</div>
                        <div class="s-stars">★★★★★</div>
                    </div>
                    <div class="s-card">
                        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/java/java-original.svg" class="s-icon">
                        <div class="s-name">JAVA</div>
                        <div class="s-stars">★★★★☆</div>
                    </div>
                    <div class="s-card">
                        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/dart/dart-original.svg" class="s-icon">
                        <div class="s-name">Dart</div>
                        <div class="s-stars">★★★★☆</div>
                    </div>
                    <div class="s-card">
                        <img src="https://cdn-icons-png.flaticon.com/512/1693/1693746.png" class="s-icon">
                        <div class="s-name">Artificial Int.</div>
                        <div class="s-stars">★★★★☆</div>
                    </div>
                    <div class="s-card">
                        <img src="https://cdn-icons-png.flaticon.com/512/2083/2083213.png" class="s-icon">
                        <div class="s-name">Deep Learning</div>
                        <div class="s-stars">★★★★☆</div>
                    </div>
                    <div class="s-card">
                        <img src="https://cdn-icons-png.flaticon.com/512/4113/4113009.png" class="s-icon">
                        <div class="s-name">Comp. Vision</div>
                        <div class="s-stars">★★★★☆</div>
                    </div>
                    <div class="s-card">
                        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/mysql/mysql-original.svg" class="s-icon">
                        <div class="s-name">SQL</div>
                        <div class="s-stars">★★★★☆</div>
                    </div>
                    <div class="s-card">
                        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/cplusplus/cplusplus-original.svg" class="s-icon">
                        <div class="s-name">C++</div>
                        <div class="s-stars">★★★☆☆</div>
                    </div>
                    <div class="s-card">
                        <div style="display:flex; justify-content:center; gap:3px;">
                            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/html5/html5-original.svg" style="width:20px;">
                            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/css3/css3-original.svg" style="width:20px;">
                        </div>
                        <div class="s-name" style="margin-top:5px;">HTML & CSS</div>
                        <div class="s-stars">★★★★★</div>
                    </div>
                </div>
            </div>
        </div>

        <div id="window-works" class="window" style="display:none; width: 720px;">
            <div class="window-header">
                <span>C:\PORTFOLIO\my_works.exe</span>
                <button class="close-btn" onclick="closeWindow('works')">X</button>
            </div>
            <div class="window-content" style="padding: 30px; background-color: #fdfaf3;">
                <h3 style="margin-top: 0; color: #d97736; border-bottom: 2px dashed #78866b; padding-bottom: 10px;">> EXECUTED_PROJECTS</h3>
                <div id="projects-container" style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 15px; margin-top: 20px;">
    </div>
            </div>
        </div>

        <div id="window-contact" class="window" style="display:none;">
            <div class="window-header">
                <span>C:\PORTFOLIO\contact</span>
                <button class="close-btn" onclick="closeWindow('contact')">X</button>
            </div>
            <div class="window-content">
                <form id="contactForm">
                    <input type="text" id="name" placeholder="Name" required>
                    <input type="email" id="email" placeholder="Email" required>
                    <textarea id="message" placeholder="Message" required></textarea>
                    <button type="submit">SEND MESSAGE</button>
                </form>
                <div id="form-feedback"></div>
            </div>
        </div>

        <div id="window-admin" class="window" style="display:none; width: 420px; z-index: 100;">
            <div class="window-header" style="background-color: #d97736;"> 
                <span>C:\SYSTEM\admin_login.exe</span>
                <button class="close-btn" onclick="closeWindow('admin')">X</button>
            </div>
            <div class="window-content" style="padding: 35px; background-color: #fdfaf3; text-align: center;">
                <img src="https://cdn-icons-png.flaticon.com/512/2942/2942813.png" style="width: 65px; margin-bottom: 15px;">
                <h3 style="margin-top: 0; color: #d97736; font-size: 22px; font-weight: 900;">RESTRICTED AREA</h3>
                <p style="font-family: 'Courier New', monospace; font-size: 14px; color: #78866b; margin-bottom: 25px;">
                    Authorized personnel only. Enter credentials.
                </p>
                
                <input type="text" id="adminUser" placeholder="Username..." style="width: 80%; padding: 12px; border: 2px solid #d4cbb3; border-radius: 4px; font-family: 'Courier New', monospace; margin-bottom: 10px; outline: none; text-align: center;">
                
                <input type="password" id="adminPass" placeholder="Password..." style="width: 80%; padding: 12px; border: 2px solid #d4cbb3; border-radius: 4px; font-family: 'Courier New', monospace; margin-bottom: 20px; outline: none; text-align: center;">
                <br>
                
                <button onclick="adminLogin()" style="background-color: #78866b; color: white; border: none; padding: 12px 30px; font-family: 'Courier New', monospace; font-size: 16px; font-weight: bold; border-radius: 4px; cursor: pointer;">
                    LOGIN
                </button>

                <div id="login-feedback" style="margin-top: 15px; font-family: 'Courier New', monospace; font-weight: bold;"></div>
            </div>
        </div>

        <div id="window-cv" class="window" style="display:none; width: 750px;">
             <div class="window-header">
                 <span>C:\PORTFOLIO\cv.pdf</span>
                 <button class="close-btn" onclick="closeWindow('cv')">X</button>
            </div>
            <div class="window-content" style="padding: 0; height: 500px;">
               <iframe src="cv.pdf" width="100%" height="100%" style="border: none;"></iframe>
            </div>
        </div>
    </main>
</div>

<div class="social-bar">
    <div class="social-icons">
        <a href="https://linkedin.com/in/sara-kalan-1b103120b" target="_blank" class="box-link"><img src="https://cdn-icons-png.flaticon.com/512/174/174857.png"></a>
        <a href="https://github.com/sarakln" target="_blank" class="box-link"><img src="https://cdn-icons-png.flaticon.com/512/733/733553.png"></a>
        <a href="javascript:void(0);" onclick="openWindow('cv')" class="box-link"><img src="https://cdn-icons-png.flaticon.com/512/909/909212.png"></a>
    </div>
</div>

<script src="script.js?v=3"></script>
</body>
</html>