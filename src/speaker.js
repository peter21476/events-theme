const speaker = (props) => {
    return(
        <div className="speaker-wrapper">
            <div className="speaker-photo">
                <img src={props.photo} alt="speaker" />
            </div>
            <div className="text-wrapper">
                <div className="speaker-name">
                    <p>{props.name}</p>
                </div>
                <div className="speaker-title">
                    <p>{props.title}</p>
                </div>
                <div className="speaker-company">
                    <p>{props.company}</p>
                </div>
                <div className="speakers-social-media">
                    {props.facebook ? <div className="social-media-icon"><a target="_blank" href={props.facebook}><i class="fab fa-facebook"></i></a></div> : ''}
                    {props.twitter ? <div className="social-media-icon"><a target="_blank" href={props.twitter}><i class="fab fa-twitter"></i></a></div> : ''}
                    {props.linkedin ? <div className="social-media-icon"><a target="_blank" href={props.linkedin}><i class="fab fa-linkedin-in"></i></a></div> : ''}
                </div>
            </div>
        </div>
    )
}

export default speaker;