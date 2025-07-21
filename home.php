<!-- <?php
        // session_start();
        // if (!isset($_SESSION['email'])) {
        //     header("Location: index.php");
        //     exit();
        // }
        ?> -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WhatsApp - Chat</title>
    <link rel="stylesheet" href="home.css">
</head>

<body>
    <div class="app-container">
        <!-- Left Sidebar -->
        <div class="sidebar">
            <div class="sidebar-icons">
                <div class="icon-item active">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M12 2C6.48 2 2 6.48 2 12c0 1.54.36 3.04 1.05 4.39L1 22l5.61-2.05C8.96 21.64 10.46 22 12 22c5.52 0 10-4.48 10-10S17.52 2 12 2zm-1 15l-4-4 1.41-1.41L11 14.17l6.59-6.59L19 9l-8 8z" />
                    </svg>
                    <span class="notification-badge">1</span>
                </div>
                <div class="icon-item">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z" />
                    </svg>
                </div>
                <div class="icon-item" onclick="window.location.href='status.php'">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <circle cx="12" cy="12" r="10" stroke="currentColor" fill="none" />
                        <circle cx="12" cy="12" r="6" fill="currentColor" />
                    </svg>
                    <span class="notification-badge">1</span>
                </div>
                <div class="icon-item">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z" />
                    </svg>
                </div>
                <div class="icon-item">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-1 17.93c-3.94-.49-7-3.85-7-7.93 0-.62.08-1.21.21-1.79L9 15v1c0 1.1.9 2 2 2v1.93zm6.9-2.54c-.26-.81-1-1.39-1.9-1.39h-1v-3c0-.55-.45-1-1-1H8v-2h2c.55 0 1-.45 1-1V7h2c1.1 0 2-.9 2-2v-.41c2.93 1.19 5 4.06 5 7.41 0 2.08-.8 3.97-2.1 5.39z" />
                    </svg>
                </div>
            </div>
            <div class="sidebar-bottom">
                <div class="icon-item" onclick="openSettings()">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M19.14,12.94c0.04-0.3,0.06-0.61,0.06-0.94c0-0.32-0.02-0.64-0.07-0.94l2.03-1.58c0.18-0.14,0.23-0.41,0.12-0.61 l-1.92-3.32c-0.12-0.22-0.37-0.29-0.59-0.22l-2.39,0.96c-0.5-0.38-1.03-0.7-1.62-0.94L14.4,2.81c-0.04-0.24-0.24-0.41-0.48-0.41 h-3.84c-0.24,0-0.43,0.17-0.47,0.41L9.25,5.35C8.66,5.59,8.12,5.92,7.63,6.29L5.24,5.33c-0.22-0.08-0.47,0-0.59,0.22L2.74,8.87 C2.62,9.08,2.66,9.34,2.86,9.48l2.03,1.58C4.84,11.36,4.8,11.69,4.8,12s0.02,0.64,0.07,0.94l-2.03,1.58 c-0.18,0.14-0.23,0.41-0.12,0.61l1.92,3.32c0.12,0.22,0.37,0.29,0.59,0.22l2.39-0.96c0.5,0.38,1.03,0.7,1.62,0.94l0.36,2.54 c0.05,0.24,0.24,0.41,0.48,0.41h3.84c0.24,0,0.44-0.17,0.47-0.41l0.36-2.54c0.59-0.24,1.13-0.56,1.62-0.94l2.39,0.96 c0.22,0.08,0.47,0,0.59-0.22l1.92-3.32c0.12-0.22,0.07-0.47-0.12-0.61L19.14,12.94z M12,15.6c-1.98,0-3.6-1.62-3.6-3.6 s1.62-3.6,3.6-3.6s3.6,1.62,3.6,3.6S13.98,15.6,12,15.6z" />
                    </svg>
                </div>
            </div>
        </div>

        <!-- Chat List -->
        <div class="chat-list">
            <div class="chat-header">
                <h2>Chats</h2>
            </div>
            <div class="search-bar">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                    <path d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z" />
                </svg>
                <input type="text" placeholder="Ask Meta AI or Search">
            </div>
            <div class="chat-items">
                <div class="chat-item active">
                    <div class="avatar">
                        <img src="images/ajony2.jpg" alt="Scott">
                    </div>
                    <div class="chat-info">
                        <div class="chat-name">Elsa</div>
                        <div class="chat-message">On delivery it seems</div>
                    </div>
                    <div class="chat-meta">
                        <div class="chat-time">6:48 PM</div>
                    </div>
                </div>

                <div class="chat-item">
                    <div class="avatar">
                        <img src="images/hakim-small2.jpg" alt="ACITIZENS">
                    </div>
                    <div class="chat-info">
                        <div class="chat-name">Community</div>
                        <div class="chat-message">~ Nii: As part of our community...</div>
                    </div>
                    <div class="chat-meta">
                        <div class="chat-time">6:43 PM</div>
                        <div class="unread-indicator"></div>
                    </div>
                </div>

                <div class="chat-item">
                    <div class="avatar">
                        <img src="images/hakim-small2.jpg" alt="Remote">
                    </div>
                    <div class="chat-info">
                        <div class="chat-name">Internship</div>
                        <div class="chat-message">~ Joe: Yes please</div>
                    </div>
                    <div class="chat-meta">
                        <div class="chat-time">5:41 PM</div>
                    </div>
                </div>

                <div class="chat-item">
                    <div class="avatar">
                        <img src="images/hakim-small2.jpg" alt="Maame">
                    </div>
                    <div class="chat-info">
                        <div class="chat-name">John</div>
                        <div class="chat-message">Omw to football</div>
                    </div>
                    <div class="chat-meta">
                        <div class="chat-time">4:07 PM</div>
                    </div>
                </div>

                <div class="chat-item">
                    <div class="avatar">
                        <img src="images/ajony2.jpg" alt="Oswald">
                    </div>
                    <div class="chat-info">
                        <div class="chat-name">Ama</div>
                        <div class="chat-message">https://meet.google.com/pwr-msvt-tos</div>
                    </div>
                    <div class="chat-meta">
                        <div class="chat-time">3:28 PM</div>
                    </div>
                </div>

                <div class="chat-item">
                    <div class="avatar">
                        <img src="images/hakim-small2.jpg" alt="Nana">
                    </div>
                    <div class="chat-info">
                        <div class="chat-name">Nana</div>
                        <div class="chat-message">Sure</div>
                    </div>
                    <div class="chat-meta">
                        <div class="chat-time">5:20 AM</div>
                    </div>
                </div>

                <div class="chat-item">
                    <div class="avatar">
                        <img src="images/albert2.jpg" alt="Kwame">
                    </div>
                    <div class="chat-info">
                        <div class="chat-name">Kwame</div>
                        <div class="chat-message">You are welcome</div>
                    </div>
                    <div class="chat-meta">
                        <div class="chat-time">Tuesday</div>
                    </div>
                </div>

                <div class="chat-item">
                    <div class="avatar">
                        <img src="images/ajony2.jpg" alt="Group">
                    </div>
                    <div class="chat-info">
                        <div class="chat-name">Test Group</div>
                        <div class="chat-message">Kwaku: Yeah i understand</div>
                    </div>
                    <div class="chat-meta">
                        <div class="chat-time">Tuesday</div>
                    </div>
                </div>

                <div class="chat-item">
                    <div class="avatar">
                        <img src="images/hakim-small2.jpg" alt="Sports">
                    </div>
                    <div class="chat-info">
                        <div class="chat-name">SPORTS</div>
                        <div class="chat-message">Kojo: Liverpool is the best tea...</div>
                    </div>
                    <div class="chat-meta">
                        <div class="chat-time">Yesterday</div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main Chat Area -->
        <div class="main-chat">
            <div class="welcome-screen">
                <div class="welcome-content">
                    <div class="whatsapp-logo">
                        <svg width="100" height="100" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M12.04 2c-5.46 0-9.91 4.45-9.91 9.91 0 1.75.46 3.45 1.32 4.95L2.05 22l5.25-1.38c1.45.79 3.08 1.21 4.74 1.21 5.46 0 9.91-4.45 9.91-9.91S17.5 2 12.04 2M8.53 7.33c.16 0 .3.01.43.01.14 0 .32-.01.5.38.18.41.64 1.49.69 1.6.05.11.08.24.02.39-.06.15-.09.24-.18.37-.09.12-.19.27-.27.36-.09.08-.18.17-.08.33.1.16.45.73.96 1.18.66.58 1.22.76 1.39.84.17.08.27.07.37-.04.1-.11.43-.5.54-.67.11-.17.22-.14.37-.08.15.06 1.02.48 1.2.56.18.08.3.12.34.18.05.06.05.35-.08.68-.13.33-.76.65-1.05.73-.29.08-.66.12-1.14-.04-.48-.16-2.06-.85-3.84-2.46-1.78-1.61-2.66-3.74-2.74-3.91-.08-.17-.02-.26.06-.35.08-.08.18-.21.27-.31.09-.1.12-.18.18-.3.06-.12.03-.22-.02-.31-.05-.09-.45-1.09-.61-1.49-.16-.4-.33-.34-.45-.35-.12-.01-.26-.01-.4-.01z" />
                        </svg>
                    </div>
                    <h1>WhatsApp for Mac</h1>
                    <p>Send and receive messages without keeping your phone online.<br>
                        Use WhatsApp on up to 4 linked devices and 1 phone at the same time.</p>
                    <div class="encryption-notice">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M12 1L3 5v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V5l-9-4z" />
                        </svg>
                        <span>Your personal messages are <span class="encrypted">end-to-end encrypted</span></span>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <script>
        function openSettings() {
            if (!document.getElementById('settingsOverlay')) {
                fetch('settings.php')
                    .then(response => response.text())
                    .then(html => {
                        const parser = new DOMParser();
                        const doc = parser.parseFromString(html, 'text/html');
                        const overlay = doc.getElementById('settingsOverlay');
                        document.body.appendChild(overlay);

                        overlay.style.display = 'flex';
                    })
                    .catch(error => {
                        console.error('Error loading settings:', error);
                    });
            } else {
                document.getElementById('settingsOverlay').style.display = 'flex';
            }


        }

        function closeSettings() {
            document.getElementById('settingsOverlay').style.display = 'none';
        }

        function logout() {
            if (confirm('Are you sure you want to log out?')) {
                alert('Logging out...');
                window.location.href = 'logout.php';
            }
        }
    </script>
</body>

</html>