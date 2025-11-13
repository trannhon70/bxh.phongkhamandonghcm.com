<style>
.notification {
    position: fixed;
    top: -100px;
    left: 50%;
    transform: translateX(-50%);
    background-color: #4caf50;
    color: white;
    padding: 5px 10px;
    border-radius: 8px;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.3);
    z-index: 999999;
    opacity: 0;
    pointer-events: none;
    width: 320px;
}

.slide-down {
    animation: slideDown 0.6s forwards;
    pointer-events: auto;
}

.slide-up {
    animation: slideUp 0.6s forwards;
}

@keyframes slideDown {
    from {
        top: -100px;
        opacity: 0;
    }

    to {
        top: 30px;
        opacity: 1;
    }
}

@keyframes slideUp {
    from {
        top: 30px;
        opacity: 1;
    }

    to {
        top: -100px;
        opacity: 0;
    }
}
</style>

<div id="notification" class="notification"></div>

<script>
const notification = document.getElementById('notification');
const message = `
<a  href="https://npa.zoosnet.net/LR/Chatpre.aspx?id=NPA46777247&lng=en" 
   style="text-decoration: none; color: white; display: flex; align-items: center; " >
    <img loading="lazy" width="50px" src="<?php echo $local ?>/images/icons_chat/icon_mess.webp" alt="..." >
    <div>
        <div style="font-size: 15px;">Có một chuyên gia đang kết nối với bạn</div>
        <div style="font-size: 18px; margin-top: 3px; font-weight: 700;">kết nối ngay</div>
    </div>
</a>`;


function showNotification(msg) {
    notification.innerHTML = msg;;
    notification.classList.remove('slide-up');
    notification.classList.add('slide-down');
}

function hideNotification() {
    notification.classList.remove('slide-down');
    notification.classList.add('slide-up');
}

function runCycle() {
    showNotification(message);

    // 5s sau thì ẩn đi
    setTimeout(() => {
        hideNotification();
    }, 5000);

    // 60s sau thì hiện lại (lặp vô hạn)
    setTimeout(runCycle, 60000);
}

// bắt đầu chạy sau 60s kể từ khi load
setTimeout(runCycle, 60000);
</script>