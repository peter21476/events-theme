const sponsor = (props) => {
    return (
        <div className="sponsor-wrapper">
            <div className="sponsor-logo">
                <a href={props.link}><img src={props.logo} className="img-fluid" alt="sponsor" /></a>
            </div>
            <div className="sponsor-name">{props.name}</div>
        </div>
    )
};

export default sponsor;

