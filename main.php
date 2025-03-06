<?php
    global $application_title;
?>

<main>
    <div class="left">
        <section class="account">
            <p>
                DEV Community is a community of 2,879,980 amazing developers
            </p>
            <p>
                We're a place where coders share, stay up-to-date and grow their careers.
            </p>
            <button class="create_account">Create account</button>
            <button class="log_in">Log in</button>
        </section>
        <section class="tags">
            <nav>
                <a href=""><span style="color: orange"><i class="fa-solid fa-house-user"></i></span> Home</a>
                <a href=""><span style="color: blue"><i class="fa-solid fa-comment"></i></span> DEV++</a>
                <a href=""><span style="color: gray"><i class="fa-solid fa-microphone"></i></span> Podcasts</a>
                <a href=""><span style="color: gray"><i class="fa-solid fa-video"></i></span> Videos</a>
                <a href=""><span style="color: orange"><i class="fa-solid fa-tags"></i></span> Tags</a>
                <a href=""><span style="color: orange"><i class="fa-solid fa-lightbulb"></i></span> Dev Help</a>
                <a href=""><span style="color: purple"><i class="fa-solid fa-bag-shopping"></i></span> Forem Shop</a>
                <a href=""><span style="color: red"><i class="fa-solid fa-heart"></i></span> Advertise on DEV</a>
                <a href=""><span style="color: orange"><i class="fa-solid fa-trophy"></i></span> DEV Challenges</a>
                <a href=""><span style="color: orange"><i class="fa-solid fa-star"></i></span> DEV Showcase</a>
                <a href=""><span style="color: orange"><i class="fa-solid fa-face-smile"></i></span> About</a>
                <a href=""><span style="color: orange"><i class="fa-solid fa-bullhorn"></i></span> Contact</a>
                <a href=""><span style="color: orange"><i class="fa-solid fa-circle-question"></i></span> Software Comparisons</a>
            </nav>
        </section>
    </div>

    <section class="articles">
        <nav>
            <a href=""><strong>Relevant</strong></a>
            <a href="">Latest</a><a href="">Top</a>
        </nav>
        <p><?= $application_title?></p> 
        <article class="featured">
            <figure>
                <img src="imgs/featured.jpg" alt="">
                <figcaption>
                    <img src="imgs/walter.png" alt="">
                    <div>
                        <p>Walter</p>
                        <date>Mar 3</date>
                        <h2>It’s Not A.I. — Junior Developers Have Always Struggled to Code</h2>
                        <p>#webdev #ai #programming</p>
                        <div>
                            <p>21 reactions</p>
                            <p>4 comments</p>
                            <p>4 min read</p>
                            <p>bookmark</p>
                        </div>  
                    </div>
                </figcaption>
            </figure>
        </article>
        <article>
            <img src="imgs/jazini.jpg" alt="">
            <div>
                <p>Mahdi Jazini</p>
                <date>Mar 4</date>
                <h3>Codemod in Next.js 15: Updating Your Project Has Never Been Easier!</h3>
                <p>#nextjs #webdev #frontend #programming</p>
                <div>
                    <p>25 reactions</p>
                    <p>7 comments</p>
                    <p>4 min read</p>
                    <p>bookmark</p>
                </div>  
            </div>
        </article>
        <article>
            <img src="imgs/jazini.jpg" alt="">
            <div>
                <p>Mahdi Jazini</p>
                <date>Mar 4</date>
                <h3>Codemod in Next.js 15: Updating Your Project Has Never Been Easier!</h3>
                <p>#nextjs #webdev #frontend #programming</p>
                <div>
                    <p>25 reactions</p>
                    <p>7 comments</p>
                    <p>4 min read</p>
                    <p>bookmark</p>
                </div>  
            </div>
        </article>
        <article>
            <img src="imgs/jazini.jpg" alt="">
            <div>
                <p>Mahdi Jazini</p>
                <date>Mar 4</date>
                <h3>Codemod in Next.js 15: Updating Your Project Has Never Been Easier!</h3>
                <p>#nextjs #webdev #frontend #programming</p>
                <div>
                    <p>25 reactions</p>
                    <p>7 comments</p>
                    <p>4 min read</p>
                    <p>bookmark</p>
                </div>  
            </div>
        </article>
        <article>
            <img src="imgs/jazini.jpg" alt="">
            <div>
                <p>Mahdi Jazini</p>
                <date>Mar 4</date>
                <h3>Codemod in Next.js 15: Updating Your Project Has Never Been Easier!</h3>
                <p>#nextjs #webdev #frontend #programming</p>
                <div>
                    <p>25 reactions</p>
                    <p>7 comments</p>
                    <p>4 min read</p>
                    <p>bookmark</p>
                </div>  
            </div>
        </article>


    </section>

    <div class="right">
        <section class="threads">
            <h4>#discuss</h4>
            <p>Discussion threads targeting the whole community</p>
            <p>Meme Monday</p>
            <p>43 comments</p>
            <article>
                <p>This Is Probably the Most Lightweight Columnar Storage Technology</p>
            </article>
            <article>
                <p>Evolution of Decentralized Identity and Verifiable Credentials</p>
            </article>
            <article>
                <p>What are the most important things I need to know as new coder?(I want to get a job in the field ...</p>
            </article>
            <article>
                <p>Let's see what happens. Good luck everyone!</p>
            </article>
        </section>
        <section class="resources">


        </section>
    </div>
</main>