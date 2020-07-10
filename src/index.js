import Speakers from './speakers';
import Sponsors from './sponsors';
import Agenda from './agenda';
import SpeakersPage from './speakers-page';


const { render } = wp.element;

const App = () => {

  return (
    <Speakers />
  );
};

let checkHomePage = document.getElementById(`react-app`);
let checkAgendaPage = document.getElementById(`agenda-app`);
let checkSpeakersPage = document.getElementById(`speakerspage-app`);

if(checkHomePage !== null) {
  render(<Speakers />, document.getElementById(`react-app`));
  render(<Sponsors />, document.getElementById(`sponsors-app`));
}
if(checkAgendaPage !== null) {
  render(<Agenda />, document.getElementById(`agenda-app`));
}
if(checkSpeakersPage !== null) {
  render(<SpeakersPage />, document.getElementById(`speakerspage-app`));
}