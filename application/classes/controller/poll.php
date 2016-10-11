<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Poll extends Controller_Application {
  /**
	 * poll index.
	 */
	public function action_index()
	{ 
		$poll_questions = ORM::factory('poll_questions')->find_all();
		
		$this->template->meta = HTML::meta_helper(HTML::entities('View results of the Tigé polls.'), 'poll, results, inboard, boat, wakeboard, waterski, wakesurf, manufacturer');
	  $this->template->title = HTML::entities("Tigé.com: Poll Archive");
	  $this->template->unique_styles = HTML::style('public/stylesheets/pollresults.css');
	  $this->template->page_id = 'poll';
	  
	  if($this->session->get('confirmation')) 
	  {
			$this->template->confirmation = "<div class='confirmation'><div>".
				$this->session->get('confirmation')."</div></div>";
			$this->session->delete('confirmation');
			$this->template->unique_scripts .= HTML::script("public/javascripts/flashdata.js");
		} 
		else 
		{
			$this->template->confirmation = '';
		}
		
		$this->template->content = View::factory('pages/poll/index');
		
		// output poll archive
		$this->template->content->polls = '';
		foreach($poll_questions as $poll_question)
		{ 
		  $polls = View::factory('pages/poll/fragments/poll');
		  $polls->poll_question = HTML::entities($poll_question->question);
		  $polls->poll_answers = $poll_question->poll_answers->find_all();
		  
		  // get total votes for each question
		  $polls->total_votes = array();
		  foreach($polls->poll_answers as $poll_answer) 
		  {
		    array_push($polls->total_votes, $poll_answer->votes);
		  }
		  $polls->total_votes = array_sum($polls->total_votes);
		  
		  $this->template->content->polls .= $polls;
		}
		$this->template->content->polls .= '';
  }
  
  public function action_show()
	{
	  //$request = Request::instance();
		$poll_question = ORM::factory('poll_questions')->find($this->request->param('id'));
		
		$this->template->meta = HTML::meta_helper(HTML::entities("$poll_question->question"), 'poll, results, inboard, boat, wakeboard, waterski, wakesurf, manufacturer');
	  $this->template->title = HTML::entities("Tigé.com, Poll: $poll_question->question");
	  $this->template->unique_styles = HTML::style('public/stylesheets/pollresults.css');
	  $this->template->page_id = "poll".$this->request->param('id')."";
	  
	  if($this->session->get('confirmation')) 
	  {
			$this->template->confirmation = "<div class='confirmation'><div>".
				$this->session->get('confirmation')."</div></div>";
			$this->session->delete('confirmation');
			$this->template->unique_scripts .= HTML::script("public/javascripts/flashdata.js");
		} 
		else 
		{
			$this->template->confirmation = '';
		}
		
		// Output Poll
		$this->template->content = View::factory('pages/poll/show');
		$this->template->content->poll_question = HTML::entities($poll_question->question);
		$this->template->content->poll_answers = $poll_question->poll_answers->find_all();
		
		// get total votes for the question
	  $this->template->content->total_votes = array();
	  foreach($this->template->content->poll_answers as $poll_answer) 
	  {
	    array_push($this->template->content->total_votes, $poll_answer->votes);
	  }
	  $this->template->content->total_votes = array_sum($this->template->content->total_votes);
  }
  
  /**
	 * poll vote action.
	 */
	public function action_vote()
	{
		if(isset($_POST['insert']) && $_POST['insert'] == 'poll') 
		{
		  $poll_answer = ORM::factory('poll_answers', $_POST['vote']);
		  $poll_answer->values(array('votes' => $poll_answer->votes + 1));
		  
		  if($poll_answer->save())
		  {
			  $this->session->set('confirmation', 'thanks for voting');
			  $this->request->redirect("poll/show/".$poll_answer->poll_questions->id);
			}
			else
			{
			  $this->session->set('confirmation', 'There was an error, you&rsquo;re vote was not logged.');
			  $this->request->redirect('/');
			}
		}
  }
}