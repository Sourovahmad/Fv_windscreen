import React from 'react';
import { Link } from 'react-router-dom';
import styled from 'styled-components';
import blogCardBg from "../../images/blog-card-background.png"
import manPic from "../../images/guybentley.jpg"

const BlogCard = () => {
    const BlogCardDiv = styled.div`
        position: relative;
        width:90%;
        .main {
            /* background: url(${blogCardBg}) no-repeat center;
            background-size: 100%;
            box-shadow:10px 30px 50px -10px pink; */

            padding: 20px 5px ;
            #blog-img{
                width:150px;
                height:150px;
                object-fit:cover;
                background:white;
                border-radius:50%;
                position:absolute;
                z-index:10;
                left:0px;
            }
            &:hover{
                #bg-image{
                    filter:drop-shadow(5px 5px 10px rgba(255, 110, 146, 0.479))
                }
            }
        }
        #bg-image{
            filter:drop-shadow(1px 1px 2px #ff7b86);
            position:absolute;
            top:0px;
            left:0px;
            width:100%;
            height:100%;
            z-index:-100;
        }
    `;


    return (
        <BlogCardDiv>
            <div className="main">
                <div className="row">
                    <div className="col-4">
                        <img src={manPic} alt="" id="blog-img"/>
                    </div>
                    <div className="col-8">
                        <h5>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente, distinctio!</h5>
                        <p className="small">Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt, provident!</p>
                        <Link> See more</Link>
                    </div>
                    <img src={blogCardBg} id="bg-image" alt=""/>
                </div>
            </div>
        </BlogCardDiv>
    );
};

export default BlogCard;