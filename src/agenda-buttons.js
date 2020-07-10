const agendaButtons = (props) => {
    return (
        <div data-key={props.buttonIndex} data-day={props.day} onClick={props.updateDateFunc} className={`day-button ${props.buttonCondition == props.buttonIndex ? "active" : ""}`}>{props.day}</div>
    )
};

export default agendaButtons;