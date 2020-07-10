import AgendaButton from './agenda-buttons';
import AgendaItem from './agenda-item';

const { useState, useEffect } = wp.element;


const Agenda = () => {
    useEffect(function(){
        fetch('https://wpevents.site//wp-json/wp/v2/agenda_module/?per_page=71')
          .then((response) => {
            return response.json();
          })
          .then((myJson) => {
            setAgendaAPI(myJson);
            setDayDisplay(myJson[0].acf.session_date);
          });
        }, []);

        const [agendaAPI, setAgendaAPI] = useState([]);

        const [dayDisplay, setDayDisplay] = useState('');

        const [condition, setCondition] = useState(0);

        let eventDays = agendaAPI.map(function(day){
            return day.acf.session_date;
        });

        eventDays = [...new Set(eventDays)];

        let daysButton = eventDays.map(function(dayButton, index){
            return (
                <AgendaButton
                    day={dayButton}
                    updateDateFunc={updateDate}
                    buttonIndex={index}
                    buttonCondition={condition}
                 />
            );
        });

        let agendaFilter = agendaAPI.filter(function(eventDay){
            if (eventDay.acf.session_date == dayDisplay) {
                return (eventDay)
            }
        });

        let agenda = agendaFilter.map(function(eventItem){
            return (
                <AgendaItem 
                time={eventItem.acf.session_time} 
                title={eventItem.acf.session_title} 
                description={eventItem.acf.session_description}
                 /> 
            )
        });

        function updateDate(event) {
            let getDate = event.target.getAttribute('data-day');
            let getDataKey = event.target.getAttribute('data-key');
            setDayDisplay(getDate);
            setCondition(getDataKey);
        }

        return (
            <div>
                <div className="agenda-buttons">
                    {daysButton}
                </div>
                <div className="agenda-main">
                    {agenda}
                </div>
            </div>
        )

};

export default Agenda;
