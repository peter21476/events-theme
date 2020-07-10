const agendaItem = (props) => {
    return (
        <div className="session-wrapper">
        <div className="time-title-wrapper">
            <div className="session-time"><i class="far fa-clock"></i> {props.time}</div>
            <div className="session-title">{props.title}</div>
        </div>
        <div className="session-description" dangerouslySetInnerHTML={{__html: props.description}}></div>
    </div>
    )
}

export default agendaItem;