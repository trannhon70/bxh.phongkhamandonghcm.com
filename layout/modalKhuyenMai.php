<style>
    .modal {
        display: none;
        position: fixed;
        z-index: 1000;
        left: 0;
        top: 0%;
        width: 100%;
        height: 100%;
        overflow: auto;
        background: rgb(63 63 63 / 70%);
        z-index: 999999;
    }

    .modal-content {
        margin: 15% auto;
        width: 500px;
        height: auto;
        animation-duration: 1s;
        animation-name: slidein;
    }

    @keyframes slidein {
        from {
            transform: translateX(150vw) scaleX(2);
        }

        to {
            transform: translateX(0) scaleX(1);
        }
    }

    @keyframes slideout {
        from {
            transform: translateX(0) scaleX(1);
        }

        to {
            transform: translateX(150vw) scaleX(2);
        }
    }


    .closeKM {
        color: red;
        float: right;
        font-size: 50px;
        font-weight: bold;
        position: absolute;
        top: -30px;
        right: 40%;
        border-radius: 50%;
        display: block;
        width: 50px;
        height: 50px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .closeKM:hover,
    .closeKM:focus {
        color: black;
        text-decoration: none;
        cursor: pointer;
    }

    @media only screen and (max-width: 999px) {
        .modal-content {
            margin: 33% 8%;
            width: auto;
            height: auto;
            animation-duration: 1s;
            animation-name: slidein;
        }

    }
</style>


<div id="myModalKM" class="modal">
    <div class="modal-content">
        <div style="position: relative;">
            <span class="closeKM" id="closeModalKM">×</span>
            <a href="https://npa.zoosnet.net/LR/Chatpre.aspx?id=NPA46777247&lng=en">
                <img loading="lazy" style="border: 1px solid success; border-radius: 8px; " width="100%" height="auto"
                    src="<?php echo $local ?>/images/users/bac_si_tu_van.webp" alt="...">
            </a>
        </div>
    </div>
</div>

<script>
    const modal = document.getElementById("myModalKM");
    const btn = document.getElementById("openModalKM");
    const span = document.getElementById("closeModalKM");
    const sloseModal = document.getElementById("clickSloseModal");
    // Hàm để mở modal
    function showModal() {
        modal.style.display = "block";
    }

    // Hàm để đóng modal và đặt lại thời gian chờ
    function closeModal() {
        modal.style.display = "none";
        resetModalTimer();
    }

    // Sự kiện khi nhấp vào nút mở modal (nếu cần)
    if (btn) {
        btn.onclick = showModal;
    }

    // Khi người dùng nhấp vào "×" hoặc nút đóng modal
    if (span) {
        span.onclick = closeModal;
    }

    if (sloseModal) {
        sloseModal.onclick = closeModal;
    }

    // Khi người dùng nhấp ra ngoài modal, đóng modal
    // window.onclick = function(event) {
    //     if (event.target === modal) {
    //         closeModal();
    //     }
    // }

    // Đặt hẹn giờ để hiện modal mỗi 30 giây
    let modalTimer = setInterval(showModal, 45000);

    // Hàm đặt lại hẹn giờ
    function resetModalTimer() {
        clearInterval(modalTimer);
        modalTimer = setInterval(showModal, 45000);
    }
</script>