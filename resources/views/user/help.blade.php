@extends('layouts.main')
@section('container')
    <section class="helpsec" style="min-height: 140vh">
        <div class="help">
            <h1 style="margin: 50px;margin-top:100px; text-align: center">
                Frequently Asked Questions
            </h1>
            <ul class="faq-list">
                <li class="faq-item">
                    <div class="faq-question">How to Get Started with Coding?</div>
                    <p class="faq-answer">
                        To get started with coding, you can follow these steps:
                        <br />1. Sign up or log in to your account. <br />2. Choose the
                        course you want to take. <br />3. Follow the video tutorials and
                        available learning materials. <br />4. Practice what you've
                        learned by writing your own code.
                    </p>
                </li>
                <li class="faq-item">
                    <div class="faq-question">How to Contact Technical Support?</div>
                    <p class="faq-answer">
                        If you have technical questions or issues, you can contact our
                        support team through:
                        <br />1. Email: AngCode.mail.com <br />2. Phone Number:
                        021-5777-111
                    </p>
                </li>
                <li class="faq-item">
                    <div class="faq-question">How login to your account?</div>
                    <p class="faq-answer">
                        To log in to your account, follow these steps:

                        <br />1. Visit our login page. <br />2. Enter your email address
                        and your account password. <br />3. Click "Log In" to access your
                        account.
                    </p>
                </li>
                <li class="faq-item">
                    <div class="faq-question">How to register a new account?</div>
                    <p class="faq-answer">
                        To create a new account, follow these steps:
                        <br />1. Visit our registration page. <br />2. Fill in the
                        required information, including your email address and password.
                        <br />3. Click "Register" to create a new account.
                    </p>
                </li>
                <li class="faq-item">
                    <div class="faq-question">How to upload a video?</div>
                    <p class="faq-answer">
                        To upload a video, follow these steps:
                        <br />1. Log in to your account. <br />2. Go to the "Upload Video"
                        or "My Videos" page. <br />3. Select the "Upload Video" option and
                        browse for the video file you want to upload. <br />4. Provide a
                        title, description, and tags for your video. <br />5. Click
                        "Upload" to start the upload process.
                    </p>
                </li>
            </ul>
            <form action="">
                <h1 style="margin: 30px; text-align: center">
                    Do Not Found the Answer?
                </h1>
                <textarea id="userQuestion" name="userQuestion" rows="4"
                    style="width: 50vw; border-radius: 10px; margin-left: 60px; padding: 10px;" placeholder="Type your qustion here"></textarea>
                <br />
                <a  href="mailto:2210501025@mahasiswa.upnvj.ac.id" class="btn btn-info send"
                    style="
            width: 83%;
            height: 45px;
            font-size: larger;
            border-radius: 10px;
            margin-top: 10px;
            margin-left: 60px;
            margin-bottom: 70px;
            background-color: #00abf0;
          "
                    onclick="clearTextarea()">Send</a>
            </form>
        </div>
    </section>
    <script>
        //hide when click
        const faqQuestions = document.querySelectorAll(".faq-question");
        const helpsec = document.querySelector(".helpsec");
        let height = 140;

        faqQuestions.forEach((question) => {
            question.addEventListener("click", () => {
                const answer = question.nextElementSibling;
                if (answer.style.display === "block") {
                    height -= 15;
                    question.style.color = "#fff";
                    answer.style.display = "none";
                    question.style.fontWeight = "bold";
                    helpsec.style.minHeight = `${height}vh`;
                } else {
                    height += 15;
                    answer.style.display = "block";
                    question.style.color = "#00abf0";
                    question.style.fontWeight = "bold";
                    helpsec.style.minHeight = `${height}vh`;
                }
            });
        });
        //cleartext area
        function clearTextarea() {
            document.getElementById("userQuestion").value = "";
        }
    </script>
@endsection
