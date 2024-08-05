<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('sass/landing.css') }}">
    <script src="{{ asset('js/jquery-3.7.1.min.js') }}"></script>
    <title>Green Haven Project</title>
</head>
<body>
    <nav>
        <div class="logo nav-item">
            <img src="{{ asset('images/Logo.png') }}" alt="" srcset="">
        </div>
        <button class="btn" type="submit">Plant a Mangrove</button>
        <ul class="menu nav-item">
            <li>About Green Haven</li>
            <li>Event Details</li>
            <li>Our Sponsors</li>
            <li>Leaderboard</li>
        </ul>
    </nav>

    <div class="section-one">
        <div class="child left">
            <div class="content">
                <button class="btn">Green Haven Project - Mangrove</button>
                <h1>Green Horizon Await, Join Us in Planting 10,000 Mangroves!</h1>
                <div class="box progress">
                    <img src="{{ asset('images/Mangrove Icon.png') }}" alt="" class="mangrove left">
                    <div class="progress-content left">
                        <span class="progress-now">5,690</span> / 10,000 Pohon
                    </div>
                    <button class="btn right progress-btn">Support Our Mission&emsp;></button>
                    <div class="cb"></div>
                    <div class="progress-bar">
                        <div class="progress-bar-now"></div>
                    </div>
                </div>
            </div>
            <img class="mangroves-img" src="{{ asset('images/Mangroves Picture.png') }}" alt="">
        </div>
        <div class="child right">
            <div class="leaderboard">
                <h2>Leaderboard</h2>
                <div class="leaderboard-control">
                    <button class="btn active">Most Donation</button>
                    <button class="btn">Most Recent</button>
                </div>
                <div class="cb"></div>
                <div class="leaderboard-list">
                    <div class="leaderboard-list-item">
                        <div class="item-number upper left">
                            01
                        </div>
                        <div class="item-icon maven left"></div>
                        <div class="item-content left">
                            Mangrove Maven <br>
                            <span class="item-name">Budi Hartanto</span>
                        </div>
                        <div class="item-mangrove right">
                            <span class="total">350</span> Pohon
                        </div>
                        <div class="icon-mangrove right">
                            <img src="{{ asset('images/Mangrove Icon.png') }}" alt="" srcset="">
                        </div>
                        <div class="cb"></div>
                    </div>
                    <div class="leaderboard-list-item">
                        <div class="item-number upper left">
                            02
                        </div>
                        <div class="item-icon maven left"></div>
                        <div class="item-content left">
                            Mangrove Maven <br>
                            <span class="item-name">Dewi Sartika</span>
                        </div>
                        <div class="item-mangrove right">
                            <span class="total">330</span> Pohon
                        </div>
                        <div class="icon-mangrove right">
                            <img src="{{ asset('images/Mangrove Icon.png') }}" alt="" srcset="">
                        </div>
                        <div class="cb"></div>
                    </div>
                    <div class="leaderboard-list-item">
                        <div class="item-number upper left">
                            03
                        </div>
                        <div class="item-icon maven left"></div>
                        <div class="item-content left">
                            Mangrove Maven <br>
                            <span class="item-name">Eko Wahyudi</span>
                        </div>
                        <div class="item-mangrove right">
                            <span class="total">200</span> Pohon
                        </div>
                        <div class="icon-mangrove right">
                            <img src="{{ asset('images/Mangrove Icon.png') }}" alt="" srcset="">
                        </div>
                        <div class="cb"></div>
                    </div>
                    <div class="leaderboard-list-item">
                        <div class="item-number mid left">
                            04
                        </div>
                        <div class="item-icon guardian left"></div>
                        <div class="item-content left">
                            Guardian of the Grove <br>
                            <span class="item-name">Rina Kartika</span>
                        </div>
                        <div class="item-mangrove right">
                            <span class="total">190</span> Pohon
                        </div>
                        <div class="icon-mangrove right">
                            <img src="{{ asset('images/Mangrove Icon.png') }}" alt="" srcset="">
                        </div>
                        <div class="cb"></div>
                    </div>
                    <div class="leaderboard-list-item">
                        <div class="item-number lower left">
                            05
                        </div>
                        <div class="item-icon guardian left"></div>
                        <div class="item-content left">
                            Guardian of the Grove <br>
                            <span class="item-name">Agus Prasetyo</span>
                        </div>
                        <div class="item-mangrove right">
                            <span class="total">140</span> Pohon
                        </div>
                        <div class="icon-mangrove right">
                            <img src="{{ asset('images/Mangrove Icon.png') }}" alt="" srcset="">
                        </div>
                        <div class="cb"></div>
                    </div>
                    <div class="leaderboard-list-item">
                        <div class="item-number lower left">
                            06
                        </div>
                        <div class="item-icon master left"></div>
                        <div class="item-content left">
                            Mangrove Master <br>
                            <span class="item-name">Irfan Setiawan</span>
                        </div>
                        <div class="item-mangrove right">
                            <span class="total">80</span> Pohon
                        </div>
                        <div class="icon-mangrove right">
                            <img src="{{ asset('images/Mangrove Icon.png') }}" alt="" srcset="">
                        </div>
                        <div class="cb"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="cb"></div>
        <div class="sponsor">
            @for ($i=1; $i<=6; $i++)
                <img src="{{ asset('images/Sponsor-'.$i.'.png') }}">
            @endfor
        </div>
    </div>

    <div class="section-two">
        <div class="content">
            @for ($i = 1; $i <= 2; $i++)
                <img src="{{ asset('images/Section2-Logo-'.$i.'.png') }}">
            @endfor
            <div class="cb"></div>
            <h1 class="content-title">About Green Haven Project</h1>
            <p class="content-desc">
                The Green Haven Project - Mangrove aims to restore coastal ecosystems and raise awareness by planting mangroves and educating participants about the importance of these areas. This six-hout event will involve JCI member, local farmer, and students, focusing on combating beach erosion and promoting ESG values.
            </p>
        </div>
        <div class="documentation">
            <div class="doc-content doc-left">
                <img class="doc-image" src="{{ asset('images/Section2-Mangrove-1.png') }}" alt="" srcset="">
                <p class="doc-desc">Before mangroves were planted</p>
            </div>
            <div class="doc-content doc-right">
                <img class="doc-image" src="{{ asset('images/Section2-Mangrove-2.png') }}" alt="" srcset="">
                <p class="doc-desc">After mangroves were planted</p>
            </div>
            <div class="transform">
                <img src="{{ asset('images/Arrow.png') }}" alt="" srcset=""><br>
                TRANSFORMATION
            </div>
        </div>
    </div>

    <div class="section-three">
        <div class="content">
            <h1 class="title">Event Summary</h1>
            <p>We give you a brief overview of the event to give you a glimpse of what we're doing in Green Haven Project, download the detailed PDF to see how you can get involved</p>
        </div>
        <div class="activity">
            <div class="activity-detail">
                <div class="activity-date">26/04/2024</div>
                <div class="activity-time">08:00 - 11:00</div>
                <p class="activity-desc">
                    Join the impactful journey of planting mangroves, where you'll learn, collaborate with locals, earn recognition, and share your story through media coverage
                </p>
                <hr>
                <button class="btn activity-btn">View Event Details</button>
            </div>
            <div class="picture">
                <img src="{{ asset('images/Activity-Image.png') }}" alt="" srcset="">
                <button class="btn btn-navigation prev"><</button>
                <button class="btn btn-navigation next">></button>
            </div>
        </div>
        <div class="activity-progress">
            <div class="activity-progress-item active">
                <h2 class="activity-point">01</h2>
                <p class="activity-detail">
                    Introducing the beauty of mangroves on a journey to the planting site.
                </p>
            </div>
            <div class="activity-progress-item">
                <h2 class="activity-point">02</h2>
                <p class="activity-detail">
                    Working together with local farmers while planting each mangrove.
                </p>
            </div>
            <div class="activity-progress-item">
                <h2 class="activity-point">03</h2>
                <p class="activity-detail">
                    Exploring the wonders of manggrove ecotourism, an educational adventure.
                </p>
            </div>
            <div class="activity-progress-item">
                <h2 class="activity-point">04</h2>
                <p class="activity-detail">
                    Receive a plaque & badge, a mark of honor for every tree you plant.
                </p>
            </div>
            <div class="activity-progress-item">
                <h2 class="activity-point">05</h2>
                <p class="activity-detail">
                    Coverage & documentation by news media, share your story of change!
                </p>
            </div>
            <div class="cb"></div>
        </div>
    </div>

    <div class="section-four">
        <div class="content">
            <h1 class="title">Sponsorship Package</h1>
            <p>Our sponsorship package offers branding, promotional opportunities, and visibility at our event, ideal for enhancing company presence and community engagement.</p>
        </div>
        <div class="personal-package">
            <h3 class="title">Personal Sponsorship Package</h3>
            <table class="table-sponsorship personal">
                <thead>
                    <tr>
                        <th>Membership Tier</th>
                        <th>Min. Seeds</th>
                        <th>Min. Buy</th>
                        <th>Benefits</th>
                        <th>Donors</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <img src="{{ asset('images/Leaderboard-Scout.png') }}" alt="" srcset="">
                            Seedling Scout
                        </td>
                        <td>5 Seeds</td>
                        <td>IDR 75K</td>
                        <td>Badge</td>
                        <td>4,900 Donors</td>
                        <td>
                            <button class="btn package-button personal">Support Our Mission&ensp;></button>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <img src="{{ asset('images/Leaderboard-Savior.png') }}" alt="" srcset="">
                            Sapling Savior
                        </td>
                        <td>10 Seeds</td>
                        <td>IDR 150K</td>
                        <td>Badge + Pin</td>
                        <td>4,300 Donors</td>
                        <td>
                            <button class="btn package-button personal">Support Our Mission&ensp;></button>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <img src="{{ asset('images/Leaderboard-Titan.png') }}" alt="" srcset="">
                            Tree Titan
                        </td>
                        <td>20 Seeds</td>
                        <td>IDR 300K</td>
                        <td>Badge + Pin</td>
                        <td>15,000 Donors</td>
                        <td>
                            <button class="btn package-button personal">Support Our Mission&ensp;></button>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <img src="{{ asset('images/Leaderboard-Master.png') }}" alt="" srcset="">
                            Mangrove Master
                        </td>
                        <td>50 Seeds</td>
                        <td>IDR 750K</td>
                        <td>Badge + Pin + Bag</td>
                        <td>5,000 Donors</td>
                        <td>
                            <button class="btn package-button personal">Support Our Mission&ensp;></button>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <img src="{{ asset('images/Leaderboard-Guardian.png') }}" alt="" srcset="">
                            Guardian of the Grove
                        </td>
                        <td>100 Seeds</td>
                        <td>IDR 1,500K</td>
                        <td>Badge + Pin + Bag</td>
                        <td>300 Donors</td>
                        <td>
                            <button class="btn package-button personal">Support Our Mission&ensp;></button>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <img src="{{ asset('images/Leaderboard-Maven.png') }}" alt="" srcset="">
                            Mangrove Maven
                        </td>
                        <td>200 Seeds</td>
                        <td>IDR 3,000K</td>
                        <td>Badge + Pin + Bag</td>
                        <td>10 Donors</td>
                        <td>
                            <button class="btn package-button personal">Support Our Mission&ensp;></button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <hr>
        <div class="corporate-package">
            <h3 class="title">Corporate Sponsorship Package</h3>
            <table class="table-sponsorship corporate">
                <thead>
                    <tr>
                        <th>Benefits</th>
                        <th>Eco Trailblazers</th>
                        <th>Green Innovators</th>
                        <th>Eco Vanguard</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Price</td>
                        <td>15 Million IDR</td>
                        <td>30 Million IDR</td>
                        <td>45 Million IDR</td>
                    </tr>
                    <tr>
                        <td>CO<sub>2</sub> Sequestration</td>
                        <td>22,5 ton/year</td>
                        <td>45 ton/year</td>
                        <td>67,5 ton/year</td>
                    </tr>
                    <tr>
                        <td>Number of Trees</td>
                        <td>1000 Trees</td>
                        <td>2000 Trees</td>
                        <td>3000 Trees</td>
                    </tr>
                    <tr>
                        <td>Logo on JCI Banner</td>
                        <td><img src="{{ asset('images/Icon Check.png') }}" alt="" srcset=""></td>
                        <td><img src="{{ asset('images/Icon Check.png') }}" alt="" srcset=""></td>
                        <td><img src="{{ asset('images/Icon Check.png') }}" alt="" srcset=""></td>
                    </tr>
                    <tr>
                        <td>Logo on Communal Stainless Plate</td>
                        <td><img src="{{ asset('images/Icon Check.png') }}" alt="" srcset=""></td>
                        <td><img src="{{ asset('images/Icon Check.png') }}" alt="" srcset=""></td>
                        <td><img src="{{ asset('images/Icon Check.png') }}" alt="" srcset=""></td>
                    </tr>
                    <tr>
                        <td>Considered as Main Sponsor</td>
                        <td><img src="{{ asset('images/Icon Check.png') }}" alt="" srcset=""></td>
                        <td><img src="{{ asset('images/Icon Check.png') }}" alt="" srcset=""></td>
                        <td><img src="{{ asset('images/Icon Check.png') }}" alt="" srcset=""></td>
                    </tr>
                    <tr>
                        <td>Dedicated Stainless Plate</td>
                        <td></td>
                        <td><img src="{{ asset('images/Icon Check.png') }}" alt="" srcset=""></td>
                        <td><img src="{{ asset('images/Icon Check.png') }}" alt="" srcset=""></td>
                    </tr>
                    <tr>
                        <td>Report Update on Planted Trees</td>
                        <td></td>
                        <td><img src="{{ asset('images/Icon Check.png') }}" alt="" srcset=""></td>
                        <td><img src="{{ asset('images/Icon Check.png') }}" alt="" srcset=""></td>
                    </tr>
                    <tr>
                        <td>Logo on Event Clothings</td>
                        <td></td>
                        <td></td>
                        <td><img src="{{ asset('images/Icon Check.png') }}" alt="" srcset=""></td>
                    </tr>
                    <tr>
                        <td>Make a Donation</td>
                        <td><button class="btn package-button corporate">Support Our Mission&ensp;></button></td>
                        <td><button class="btn package-button corporate">Support Our Mission&ensp;></button></td>
                        <td><button class="btn package-button corporate">Support Our Mission&ensp;></button></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div class="section-five">
        <div class="content">
            <h1 class="title">Donate Today and be a<br>Guardian of the Green Belt.</h1>
            <p>Join us in our mission to rejuvenate and protect our shorelines<br>by donating to our mangrove planting project.</p>
            <button class="btn support-button">Support Our Mission&emsp;></button>
        </div>
        <div class="picture">
            @for ($i = 1; $i <= 5; $i++)
                <img class="img-{{ $i }}" src="{{ asset('images/Section5-Pict-'.$i.'.png') }}">
            @endfor
        </div>
    </div>

    <div class="footer">
        Nama yang Mengerjakan Test : Paqsy Jalasukma Fathoni Putra
    </div>
</body>
</html>
