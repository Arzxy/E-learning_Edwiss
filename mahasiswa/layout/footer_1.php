    <style>
        #for-pc {
            display: none;
        }
        #for-android {
            display: block;
        }
        @media screen and (min-width: 768px) {
            #for-pc {
                display: flex;
            }
            #for-android {
                display: none;
            }
        }
        footer {
            background-color: #639d45;
            backdrop-filter: blur(30px);
            padding: 1.5rem 3rem;
            width: 100%;
            border-radius: 5px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        footer p {
            margin-bottom: 0px;
            color: #fff;
            font-size: 13px;
        }
        footer .promotion {
            display: flex;
        }
        #for-android p {
            margin-bottom: 5px;
            color: #fff;
            font-size: 13px;
            text-align: center;
        }
        #for-android .copyright-for-android {
            margin-bottom: 0px;
            color: #fff;
            font-size: 13px;
            text-align: center;
            margin-top: 20px;
        }
        #for-android .promotion {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
        }
    </style>
    <footer id="for-pc">
        <p>Copyright © 2024 Edwiss.<br>All rights reserved.</p>
        <div class="promotion">
            <img width="133" heigh="40" src="../assets/image/badge-googleplay.png">
            <img width="133" heigh="40" src="../assets/image/badge-appstore.png">
        </div>
    </footer>
    <footer id="for-android">
        <p>Gunakan Aplikasi Edwiss:</p>
        <div class="promotion">
            <img width="133" heigh="40" src="../assets/image/badge-googleplay.png">
            <img width="133" heigh="40" src="../assets/image/badge-appstore.png">
        </div>
        <p class="copyright-for-android">Copyright © 2024 Edwiss.<br>All rights reserved.</p>
    </footer>