#Script to deploy in Linux
rm -rf /opt/lampp/htdocs/viduc/*
rsync -av /home/gcalcaterra/workspace/viduc/* /opt/lampp/htdocs/viduc/
