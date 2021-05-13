import React from "react";
import Modal from "react-modal";
import './card-responsive.css';

const customStyles = {
    content: {
        width:"60%",
        marginRight: "-50%",
        transform: "translate(-50%, -50%)",
    },
};

// Make sure to bind modal to your appElement (https://reactcommunity.org/react-modal/accessibility/)
Modal.setAppElement("#root");

function MyModal({isModalOpen, setIsOpen, children}) {
    
    

    function afterOpenModal() {
        
    }

    function closeModal() {
        setIsOpen(false);
    }

    return (
        <div>
            <Modal className="mobile-mia" isOpen={isModalOpen} onAfterOpen={afterOpenModal} onRequestClose={closeModal} style={customStyles} contentLabel="Example Modal">
                {children}
            </Modal>
        </div>
    );
}

export default MyModal;