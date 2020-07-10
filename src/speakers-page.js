import Speaker from './speaker-page';

const { useState, useEffect } = wp.element;


const SpeakersPage = () => {

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
  
      const finalSpeakers = speakersAPI.sort(function(a, b){
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
      <div className="speakers-page-wrapper">
        {finalSpeakers.map(function(speaker){
          return (
            <Speaker 
            name={speaker.acf.first_name + ' ' + speaker.acf.last_name} 
            job={speaker.acf.job_title}
            company={speaker.acf.company}
            bio={speaker.acf.bio}
            photo={speaker.acf.speakers_photo} />
          )
        })}
      </div>
    );
  };

  export default SpeakersPage;