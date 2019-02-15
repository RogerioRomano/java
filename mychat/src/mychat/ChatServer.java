package mychat;

import static io.undertow.Handlers.path;
import static io.undertow.Handlers.resource;
import static io.undertow.Handlers.websocket;

import java.util.ArrayList;
import java.util.List;

import io.undertow.Undertow;
import io.undertow.server.handlers.resource.ClassPathResourceManager;
import io.undertow.websockets.WebSocketConnectionCallback;
import io.undertow.websockets.core.AbstractReceiveListener;
import io.undertow.websockets.core.BufferedTextMessage;
import io.undertow.websockets.core.WebSocketChannel;
import io.undertow.websockets.core.WebSockets;
import io.undertow.websockets.spi.WebSocketHttpExchange;

public class ChatServer {

	public static void main(final String[] args) {

        System.out.println("To see chat in action is to open two different browsers and point them at http://localhost:8080");
        
        List<String> rooms = new ArrayList<String>();
        rooms.add("/amizade");
        rooms.add("/cidade");
        System.out.println(rooms.get(0));
    
        Undertow server = Undertow.builder()
                .addHttpListener(8080, "localhost")
                
                .setHandler(path()
                		
                        .addPrefixPath(rooms.get(0), websocket(new WebSocketConnectionCallback() {
                            		
                            @Override
                            public void onConnect(WebSocketHttpExchange exchange, WebSocketChannel channel) {
                                channel.getReceiveSetter().set(new AbstractReceiveListener() {

                                    @Override
                                    protected void onFullTextMessage(WebSocketChannel channel, BufferedTextMessage message) {
                                        final String messageData = message.getData();
                                        for (WebSocketChannel session : channel.getPeerConnections()) {
                                            WebSockets.sendText(messageData, session, null);
                                        }
                                    }
                                });
                                channel.resumeReceives();
                            }

                        }))
                        .addPrefixPath("/", resource(new ClassPathResourceManager(ChatServer.class.getClassLoader(), ChatServer.class.getPackage()))
                                .addWelcomeFiles("index.html")))
                		
                .build();
        

        server.start();
     
    }

}
