const speakerpage = (props) => {
    return (
        <div className="speaker-page-wrapper">
                <div className="photo-text-wrapper">
                    <div className="speaker-photo">
                        <img src={props.photo} />
                    </div>
                    <div className="speaker-text-wrapper">
                        <div className="speaker-name">
                            {props.name}
                        </div>
                        <div className="speaker-job-title">
                            {props.job}
                        </div>
                        <div className="speaker-company">
                            {props.company}
                        </div>
                    </div>
                </div>
                <div className="speaker-bio" dangerouslySetInnerHTML={{__html: props.bio}}></div>
        </div>
    );
};

export default speakerpage;