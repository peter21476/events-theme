import Sponsor from './sponsor';

const { useState, useEffect } = wp.element;

const Sponsors = () => {

  useEffect(function(){
    fetch('https://wpevents.site//wp-json/wp/v2/sponsors/?per_page=71')
      .then((response) => {
        return response.json();
      })
      .then((myJson) => {
        setSponsorsAPI(myJson);
      });
  
    }, []);

    const [sponsorsAPI, setSponsorsAPI] = useState([]);

    const sponsors = sponsorsAPI.map(function(sponsor){
        return (
            <Sponsor link={sponsor.acf.sponsor_link} 
            logo={sponsor.acf.sponsor_image}
            name={sponsor.acf.sponsor_name}
             />
        )
    });

  return (
    <div className="sponsors-wrapper">
        {sponsors}
    </div>
  );
};

export default Sponsors;