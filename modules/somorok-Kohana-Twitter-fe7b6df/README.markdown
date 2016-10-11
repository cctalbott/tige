# Example Usage

## Twitter Search Query

                Twitter::instance(
                array('version' => false))
                ->setUrl('http://search.twitter.com/')
                ->setResource('search')
                ->setFormat('json')
                ->setParams(array('q' => 'twitter'))
                ->execute();

## Twitter API Query

               Twitter::instance(
                array('version' => true))
                ->setResource('statuses/public_timeline')
                ->setFormat('json')
                ->execute();