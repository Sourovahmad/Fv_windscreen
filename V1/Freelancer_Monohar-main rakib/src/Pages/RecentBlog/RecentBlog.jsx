import React from 'react';
import BlogCard from './BlogCard';
import descImage from "../../images/cardbackground.png"
import womenMassage from "../../images/Signup.jpg"
import "./recentBlog.css"

const RecentBlog = () => {
    return (
        <div id="blog">
            <header>
                <div className="text-center p-5">
                    <h1 className="fw-bolder">Recent Blog</h1>
                    <p className="small">Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque, dolores!</p>
                </div>


                <div className="container">
                    <div className="row p-3 header-part">
                        <div className="col-md-6 text-center">
                            <img style={{width:"300px", height:"250px", objectFit:"fill"}} src={womenMassage} className="img-fluid rounded-circle "  alt=""/>
                        </div>
                        <div className="col-md-6 text-center">
                            <div className="desc text-start">
                                <h5>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iste, recusandae!</h5>
                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Qui, atque.</p>
                                <img src={descImage} className="desc-image" alt=""/>
                            </div>
                            <button className="btn-brand book-now">Book Now</button>
                        </div>
                    </div>
                </div>
                <div className="p-5"></div>
            </header>




            <main className="blogs">
                <div className="container">
                    <div className="row">
                        {
                            [1,3,4,5,6,7,8,4].map(item=> {
                                return(
                                    <>
                                    <div className="col-md-6 p-3 mb-4">
                                        <BlogCard />
                                    </div>
                                </>
                                )
                            })
                        }

                        <div className="p-4 text-center">
                            <button className="book-now">Next</button>
                        </div>
                    </div>
                </div>
            </main>
            
        </div>
    );
};

export default RecentBlog;