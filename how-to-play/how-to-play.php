<?php include '../layouts/header-link.php' ?>
<?php include '../layouts/header.php' ?>

<main class="main-scrollbar">

    <section class="aboutus_page py-5">
        <div class="container_fluid inner_section py-4 mt-5">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12">
                        <div class="heading text-white fw-bold fs-lg-50 fs-md-40 fs-sm-30 fs-25 mb-3 lh-sm text-center"><span class="inner_heading">How To Play</span></div>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb d-flex  justify-content-center">
                                <li class="breadcrumb-item"><a href="<?php echo f_path ?>" class="text-white fw-bold">Home</a></li>
                                <li class="breadcrumb-item active fw-bold" aria-current="page">How To Play</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>

<section class="how_to_play_page my-5">
    <div class="container-fluid py-md-5">
        <div class="container ">
            <div class="row">
                <div class="col-lg-3 col-md-4 col-12 mb-5 order-md-2 order-1">
                    <div class="nav flex-md-column flex-row shadow rounded p-md-2 p-3 gap-2 nav-pills " id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <a class="nav-link fw-bold text-dark px-3 cr_btn active  my-1 " id="v-pills-home-tab" data-bs-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true"><span>Introduction</span></a>
                        <a class="nav-link fw-bold text-dark px-3 cr_btn  my-1" id="v-pills-profile-tab" data-bs-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false"><span>Create your Team</span></a>
                        <a class="nav-link fw-bold text-dark px-3 cr_btn  my-1" id="v-pills-messages-tab" data-bs-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false"><span>Managing Your Team</span></a>
                        <a class="nav-link fw-bold text-dark px-3 cr_btn  my-1" id="v-pills-settings-tab" data-bs-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false"><span>Account Balance</span></a>
                    </div>
                </div>
                <div class="col-lg-9 col-md-8 col-12 order-md-1 order-2">
                    <div class="tab-content" id="v-pills-tabContent">
                        <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                            <p><b>CR Cricket</b> is India’s biggest Sports Game with an exponentially growing user base of over 2 crore sports fans.</p>
                            <p><b>CR Cricket</b> is played by using your sport knowledge and skill. You can pick your own team made up of real players for Cricket, Football, NBA. Create your team within a maximum budget of 100 credits. Your team earns points based on your chosen players' performance in the real-life matches. It's time to showcase your skill and go for glory!</p>
                            <p class="color-change"><strong >Follow these 5 easy steps to get started</strong></p>
                            <ul class="listNumb">
                                <li>
                                    <p><strong>Select A Match</strong>: <br>Select any of the upcoming matches from any of the current or upcoming cricket series</p>
                                </li>
                                <li>
                                    <p><strong>Create Your Team</strong>: <br>Use your sports knowledge and showcase your skills to create your <b>CR Cricket</b> team within a budget of 100 credits</p>
                                </li>
                                <li>
                                    <p><strong>Join a Contest</strong>: <br>Join any <b>CR Cricket</b> free or cash contest to win cash and the ultimate bragging rights to showoff your improvement in the Free/Skill contests on <b>CR Cricket</b>!</p>
                                </li>
                                <li>
                                    <p><strong>Follow the Match</strong>: <br>Watch the real match and track your fantasy scorecard (updated every 2 minutes)</p>
                                </li>
                                <li>
                                    <p><strong>Withdraw your Winnings</strong>: <br>Instantly withdraw your winnings from your <b>CR Cricket</b> account (One Time Verification required)</p>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                            <p class="strong fw-bold">Step 1: Select a Match</p>
                            <p>Select any upcoming match from the list of ongoing and upcoming cricket series and click on the ‘<strong>Create Team</strong>’ button.</p>
                            <p>Create your <b>CR Cricket</b> team by picking 11 players as per the following combinations (C1,C2,C3...) within a budget of 100 credits.</p>
                            <!--Combination table start-->
                            <div class="point_table">
                                <table width="100%" class="table table-bordered">
                                    <thead>
                                        <tr class="bg-theme2 text-white">
                                            <th class="border-0">Player type</th>
                                            <th class="border-0">Minimum</th>
                                            <th class="border-0">Maximum</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>WK</td>
                                            <td>1</td>
                                            <td>4</td>
                                        </tr>
                                        <tr>
                                            <td>Bat</td>
                                            <td>3</td>
                                            <td>6</td>
                                        </tr>
                                        <tr>
                                            <td>AR</td>
                                            <td>1</td>
                                            <td>4</td>
                                        </tr>
                                        <tr>
                                            <td>Bowl</td>
                                            <td>3</td>
                                            <td>6</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!--Combination table end-->
                            <p class="fw-bold">Step 2: Create your Team</p>
                            <p>Select players for your <strong><b>CR Cricket</b> team</strong> from all 4 of the categories mentioned below:</p>
                            <ul class="listBull">
                                <li>
                                    <p>WK - Wicket-keeper</p>
                                </li>
                                <li>
                                    <p>BAT - Batsmen</p>
                                </li>
                                <li>
                                    <p>BWL - Bowlers</p>
                                </li>
                                <li>
                                    <p>AR - All-rounders</p>
                                </li>
                            </ul>
                            <p>Check player info by clicking on the player image.</p>
                            <p>Sort players as per their teams, credits or points.</p>
                            <p>Keep an eye on:</p>
                            <ul class="listAlpha">
                                <li>
                                    <p>Number of players added to your team</p>
                                </li>
                                <li>
                                    <p>Available credits</p>
                                </li>
                                <li>
                                    <p>The deadline for team submission</p>
                                </li>
                            </ul>
                            <p class="fw-bold">Step 3: Select your <b>CR Cricket</b> team’s Captain &amp; Vice Captain</p>
                            <p>After creating your <b>CR Cricket</b> team, choose a Captain &amp; Vice Captain for the team.</p>
                            <ul class="listBull">
                                <li>
                                    <p>Captain - Gets <strong>2x</strong> points scored by him in the actual game</p>
                                </li>
                                <li>
                                    <p>Vice Captain - Gets <strong>1.5x</strong> points scored by him in the actual game</p>
                                </li>
                            </ul>
                            <p class="fw-bold">Step 4: Join Contest</p>
                            <p>Join any <b>CR Cricket</b> free or cash contest to win cash and the ultimate bragging rights to showoff your improvement in the Free/Skill contests on <b>CR Cricket</b>!</p>
                            <p class="fw-bold">Step 5: Creating multiple teams</p>
                            <p>You can create upto 11 teams per match and choose to join a contests with any of the teams created!</p>
                            <p>Click on 'CREATE TEAM' for creating next team</p>
                        </div>
                        <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                            <div class="tab-pane fade active show" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                                <p>You can make as many changes to your <b>CR Cricket</b> teams as you like until the <strong>deadline</strong> of that match!</p>
                                <p>You can also change your Captain or Vice Captain before the deadline of the match. Select the “<strong>Edit Team</strong>” button to make changes to your team.</p>
                                <p>Make sure you keep an eye on which of your players are playing the match and keep your session updated at all times.</p>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                            <div class="tab-pane fade active show" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                                <p>You can <strong>view, withdraw or deposit</strong> money into your <b>CR Cricket</b> account anytime by going to the “<strong>My Account</strong>” link.</p>
                                <p>You will need to go through a One Time Account Verification process before you withdraw any money from your <b>CR Cricket</b> account. Don’t worry – this process wont take time and will not be repeated unless you change any of your details.</p>
                                <p>Money in your <b>CR Cricket</b> account is divided into 3 categories:</p>
                                <p><strong>Unutilized:</strong> If you have deposited any amount but have not yet joined any league using this amount, it will be categorized as Unutilized in your <b>CR Cricket</b> account</p>
                                <p><strong>Winnings:</strong> The amount of money earned as “winnings” through any cash leagues joined. No processing fees will be deducted if you wish to withdraw any amount from your Winnings!</p>
                                <p><strong>Cash Bonus:</strong> It’s on us! This is given by <b>CR Cricket</b> to you, and can be used to join any public cash leagues and win more cash! This cash bonus comes with an expiry date so make full use of this freebie and get started!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


</main>
<?php include '../layouts/footer.php' ?>
<?php include '../layouts/footer-link.php' ?>