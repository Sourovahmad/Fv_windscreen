import React from "react";
import "./carde.css"




const AppointMentModalContent = () => {

    var months = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
    return (
        <div id="my-modal">
            <section>
                <div class="inner">
                    <h3>Select appointment time</h3>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur <br />
                        adipiscing elit
                    </p>
                    <p>
                        <span>
                            <button id="lefttbutton">
                                {" "}
                                <i class="fas fa-angle-left"></i>
                            </button>
                        </span>{" "}
                        <span id="currentYear">{months[new Date().getMonth()]} {new Date().getFullYear()} </span>{" "}
                        <span>
                            {" "}
                            <button id="rightbutton">
                                {" "}
                                <i class="fas fa-angle-right"></i>
                            </button>{" "}
                        </span>
                    </p>

                    <ul class="week-days">
                        <li>Saturday</li>
                        <li>Sunday</li>
                        <li>Monday</li>
                        <li>Tuesday</li>
                        <li>Wednesday</li>
                        <li>Thursday</li>
                        <li>Friday</li>
                    </ul>

                    <ul class="numbers">
                        <li class="number">
                            {" "}
                            <button class="btn" id="one">
                                1
                            </button>{" "}
                        </li>
                        <li class="number">
                            {" "}
                            <button class="btn" id="two">
                                2
                            </button>{" "}
                        </li>
                        <li class="number">
                            {" "}
                            <button class="btn" id="three">
                                3
                            </button>{" "}
                        </li>
                        <li class="number">
                            {" "}
                            <button class="btn" id="four">
                                5
                            </button>{" "}
                        </li>
                        <li class="number">
                            {" "}
                            <button class="btn" id="five">
                                6
                            </button>{" "}
                        </li>
                        <li class="number">
                            {" "}
                            <button class="btn" id="six">
                                7
                            </button>{" "}
                        </li>
                        <li class="number">
                            {" "}
                            <button class="btn" id="seven">
                                8
                            </button>{" "}
                        </li>
                    </ul>
                </div>
                <div className="p-3">
                    <h5>Choose Time</h5>

                    <div class="footer">
                        <ul>
                            <li>07:30 am</li>
                            <li>07:30 am</li>
                            <li>07:30 am</li>
                            <li>07:30 am</li>
                            <li>07:30 am</li>
                        </ul>
                    </div>
                </div>
            </section>
        </div>
    );
};

export default AppointMentModalContent;
