import Speaker from './speaker';

const { useState, useEffect } = wp.element;

const Speakers = () => {

    useEffect(function(){
      fetch('https://wpevents.site//wp-json/wp/v2/spaekers_list/?per_page=71')
        .then((response) => {
          return response.json();
        })
        .then((myJson) => {
          setSpeakersAPI(myJson);
        });
    
      }, []);
  
      const [speakersAPI, setSpeakersAPI] = useState([]);
  
      const confirmedSpeakers = speakersAPI.filter(function(speaker){
          return speaker.acf.confirmed_speaker == 'Confirmed'
      });
  
      const finalSpeakers = confirmedSpeakers.sort(function(a, b){
        let nameA = a.acf.last_name.toUpperCase();
        let nameB = b.acf.last_name.toUpperCase();
        if (nameA < nameB) {
          return -1;
        }
        if (nameA > nameB) {
          return 1;
        }    
      });
  
    
    return (
      <div className="speakers-wrapper">
        {finalSpeakers.map(function(speaker){
          return (
            <Speaker name={speaker.acf.first_name + ' ' + speaker.acf.last_name } 
            photo={speaker.acf.speakers_photo} 
            title={speaker.acf.job_title}
            company={speaker.acf.company}
            facebook={speaker.acf.facebook_link}
            twitter={speaker.acf.twitter_link}
            linkedin={speaker.acf.linkedin_link} />
          )
        })}
      </div>
    );
  };

  export default Speakers;