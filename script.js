function openWindow(windowName) {
    document.querySelectorAll('.window').forEach(win => {
        win.style.display = 'none';
    });
    const targetWindow = document.getElementById('window-' + windowName);
    if(targetWindow) {
        targetWindow.style.display = 'block';
    }

    if(windowName === 'works') {
        fetchProjects();
    }
}

function closeWindow(windowName) {
    document.getElementById('window-' + windowName).style.display = 'none';
}


function fetchProjects() {
    let container = document.getElementById('projects-container');
    if(!container) return;
    
    container.innerHTML = '<p style="text-align: center; grid-column: span 3;">Connecting to database...</p>'; 

    // api.php dosyamızdaki yeni getProjects aksiyonuna istek atıyoruz
    fetch('api.php?action=getProjects')
    .then(response => response.json())
    .then(data => {
        container.innerHTML = ''; 
        
        if(data.length === 0) {
            container.innerHTML = '<p style="text-align: center; grid-column: span 3;">No projects found.</p>';
            return;
        }

        data.forEach(project => {
            // Veritabanındaki id'ye göre renk ataması yapalım (opsiyonel)
            const colors = ["#d97736", "#78866b", "#4a5441"];
            const cardColor = colors[project.id % colors.length] || "#d97736";

            container.innerHTML += `
                <div class="modern-project-card" style="background: #ffffff; border: 1px solid #e0dbcd; border-radius: 12px; overflow: hidden; box-shadow: 0 4px 15px rgba(0,0,0,0.05); display: flex; flex-direction: column; height: 100%;">
                    <div style="width: 100%; height: 130px; overflow: hidden; border-bottom: 1px solid #eee;">
                        <img src="${project.image}" alt="${project.title}" 
                             style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.4s ease;" 
                             onmouseover="this.style.transform='scale(1.1)'" onmouseout="this.style.transform='scale(1)'">
                    </div>
                    <div style="padding: 15px; flex-grow: 1;">
                        <h4 style="margin: 0 0 8px 0; color: ${cardColor}; font-size: 15px; font-weight: 800;">
                            ${project.title}
                        </h4>
                        <p style="margin: 0 0 12px 0; font-family: 'Courier New', monospace; font-size: 12px; color: #666; line-height: 1.4;">
                            ${project.description}
                        </p>
                    </div>
                    <div style="padding: 10px 15px; background: #fafafa; border-top: 1px solid #f0f0f0; font-size: 10px; font-weight: bold; color: #999;">
                        <span style="color: ${cardColor};">●</span> ${project.tools}
                    </div>
                </div>
            `;
        });
    })
    .catch(error => {
        console.error('Fetch Error:', error);
        container.innerHTML = '<p style="color:red; text-align:center; grid-column: span 3;">Database connection failed.</p>';
    });
}

const contactForm = document.getElementById('contactForm');
if (contactForm) {
    contactForm.addEventListener('submit', function(e) {
        e.preventDefault();
        let feedback = document.getElementById('form-feedback');
        
      
        let nameVal = document.getElementById('name').value;
        let emailVal = document.getElementById('email').value;
        let messageVal = document.getElementById('message').value;

        
        let formData = new FormData();
        formData.append('action', 'sendMessage');
        formData.append('name', nameVal);
        formData.append('email', emailVal);
        formData.append('message', messageVal);

        feedback.innerHTML = "<span style='color: #78866b;'>Submitting...</span>";

        fetch('api.php', { method: 'POST', body: formData })
        .then(response => response.text())
        .then(data => {
            
            feedback.innerHTML = `<span style="color:#d97736; font-weight:bold;">${data}</span>`;
            contactForm.reset(); 
        })
        .catch(error => {
            feedback.innerHTML = "<span style='color: red;'>Connection error!</span>";
        });
    });
}
// Admin Login İşlemi (AJAX)
function adminLogin() {
    let user = document.getElementById('adminUser').value;
    let pass = document.getElementById('adminPass').value;
    let feedback = document.getElementById('login-feedback');

    if(user === "" || pass === "") {
        feedback.innerHTML = "<span style='color: #d97736;'>Please do not leave any fields empty!</span>";
        return;
    }

    feedback.innerHTML = "<span style='color: #78866b;'>Checking system...</span>";

    let formData = new FormData();
    formData.append('action', 'login');
    formData.append('username', user);
    formData.append('password', pass);

    fetch('api.php', { method: 'POST', body: formData })
    .then(response => response.text())
    .then(data => {
        if(data.trim() === "SUCCESS") {
            feedback.innerHTML = "<span style='color: #78866b;'>Login Successful! Redirecting...</span>";
            
            setTimeout(() => {
                window.location.href = 'admin_dashboard.php';
            }, 1500);
        } else {
            
            feedback.innerHTML = data; 
        }
    })
    .catch(error => {
        feedback.innerHTML = "<span style='color: red;'>Connection error!</span>";
    });
} 