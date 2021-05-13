import React from 'react';
import "./review.css"
import ReviewCard from './ReviewCard';
import review_img from "../../images/login.jpg"
import PinkBlob from "../../images/blob.svg"
import MyModal from '../../Components/MyModal/MyModal';
import AppointMentModalContent from './AppointMentModalContent';

const Appointment = () => {

    const [modalIsOpen, setIsOpen] = React.useState(false);
    function openModal() {
        setIsOpen(true);
    }


    return (
        <div id="appointment-page">
            <img src={PinkBlob} className="pink-blob" alt="" />
            <div className="text-center title p-3">
                <div className="p-5">
                    <h1>Appointment</h1>
                    <p className="small w-75 mx-auto">Lorem ipsum Lorem ipsum dolor sit amet consectetur, adipisicing elit. Et, corporis. dolor sit amet consectetur adipisicing elit. Velit, eum.</p>
                </div>
            </div>

            <div className="container">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">
                            All
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">
                            Seloon for Man
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">
                            Selon For Women
                        </button>
                    </li>
                </ul>

                <div className="flex-box">
                    <div className="col-2">
                        <h6>
                            <i className="fas fa-sliders-h p-3 rounded-circle"></i>filter
                        </h6>
                    </div>
                    <div className="col-7">
                        <div class="input-group mb-3 w-75">
                            <span class="input-group-text bg-transparent" id="basic-addon1">
                                <i class="fas fa-search "></i>
                            </span>
                            <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" />
                        </div>
                    </div>
                    <div className="col-3 d-flex m-a-auto-text">
                        <h6 className="d-flex align-items-center justify-content-center">
                            <h6 className="me-2">Show </h6>
                            <select class="form-select" aria-label=".form-select-lg example">
                                <option selected>Open this select menu</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </h6>
                    </div>
                    <hr />
                </div>




                {/* tab content here */}
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <div className="container">
                            <div className="row">
                                {[1, 2, 4, 5, 6, 7, 8, 9, 10].map((item) => (
                                    <ReviewCard openModal={openModal} img={review_img} />
                                ))}
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <div className="container">

                            <div className="row">
                                {[1, 2, 4, 5, 6, 7, 8, 9, 10].map((item) => (
                                    <ReviewCard openModal={openModal} img={review_img} />
                                ))}
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                        <div className="container">
                            <div className="row">
                                {[1, 2, 4, 5, 6, 7, 8, 9, 10].map((item) => (
                                    <ReviewCard openModal={openModal} img={review_img} />
                                ))}
                            </div>
                        </div>
                    </div>
                </div>

                {/* tab content end here */}
                <div className="text-center mb-5">
                    <button  className="book-now">
                        Next
                    </button>
                    <p className="fw-bold py-3">1/12</p>
                </div>
            </div>

            <MyModal isModalOpen={modalIsOpen} setIsOpen={setIsOpen}>
                <AppointMentModalContent />
            </MyModal>
        </div>
    );
};

export default Appointment;