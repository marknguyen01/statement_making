var message = document.getElementById('message');
var config, conversation;
message.textContent = '"Reserve a workshop"';

document.getElementById('audio-control').onclick = function() {

    AWS.config.credentials = new AWS.CognitoIdentityCredentials({
        IdentityPoolId: 'us-east-1:740d0a3a-af4a-4d27-9b7a-c7b6483c6c26',
    });
    AWS.config.region = 'us-east-1';

    config = {
        lexConfig: {
            botName: "eventsSM"
        }
    };

    conversation = new LexAudio.conversation(config, function(state) {
        if(state == 'Listening') message.textContent = state;
        if(state == 'Sending') message.textContent = 'Responding';
    }, function(data) {
        console.log('Transcript: ', data.inputTranscript, ", Response: ", data.message);
    }, function(error) {
        message.textContent = error;
    });
    conversation.advanceConversation();
};
