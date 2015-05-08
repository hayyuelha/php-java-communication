/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package service;
import com.proto.UserProtos;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.context.annotation.Bean;
import org.springframework.http.converter.protobuf.ProtobufHttpMessageConverter;

import java.util.Arrays;
import java.util.Map;
import java.util.concurrent.ConcurrentHashMap;
import org.springframework.boot.SpringApplication;
import org.springframework.boot.autoconfigure.SpringBootApplication;
import org.springframework.web.bind.annotation.PathVariable;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RestController;
/**
 *
 * @author Hayyu Luthfi Hanifah
 */
@SpringBootApplication
public class ServerApplication {
    
    public static void main(String[] args) {
        SpringApplication.run(ServerApplication.class, args);
    }
    
    @Bean
    ProtobufHttpMessageConverter protobufHttpMessageConverter() {
        return new ProtobufHttpMessageConverter();
    }
    
    private UserProtos.User user(String uname, String pwd, String n, String email, String ph, String addr, String web) {
        return UserProtos.User.newBuilder()
                .setAddress(addr)
                .setEmail(email)
                .setName(n)
                .setPassword(pwd)
                .setPhone(ph)
                .setUsername(uname)
                .setWebsite(web)
                .build();
    }
    
    @Bean
    UserRepository userRepository() {
        Map<String, UserProtos.User> users = new ConcurrentHashMap<>();
        // populate with some dummy data
        // kalau sudah punya database, harusnya repo ini di-create dari database tsb
        Arrays.asList(
                //ini nanti harusnya diganti dengan methode private user di atas
                user("hayyuhanifah", "lalalala", "Hayyu Hanifah", "hayyuhanifah52@gmail.com", "085229167235", "Jl Kebon Bibit Barat", "afteryearsofposting.blogspot.com"),
                user("kafifah", "lililili", "Khoirunnisa Afifah", "k_afis@gmail.com", "085229167236", "Jl Siliwangi", "kafis.blogspot.com"),
                user("cfatima", "lulululu", "Choirunnisa Fatima", "choirunnisa.fatima@gmail.com", "085229167237", "Jl Siliwangi", "ichakid.blogspot.com")
        ).forEach(c -> users.put(c.getUsername(), c));
        // our lambda just gets forwarded to Map#get(Integer)
        return users::get;
    }
}

interface UserRepository {
    UserProtos.User findByUsername(String uname);
//    int addNewUser(UserProtos.User usr);
    //Untuk sementara pakai findByUsername aja, kan username udah unik
    //password fungsinya untuk autentikasi, diimplementasikan belakangan
}
    
@RestController
class UserRestController {

    @Autowired
    private UserRepository userRepository;

    @RequestMapping("/{uname}")
    UserProtos.User user(@PathVariable String uname) {
        UserProtos.User retval =  this.userRepository.findByUsername(uname).getDefaultInstanceForType();
        return retval;
        //harusnya ini return suatu objek protobuf user lalu dikirim ke PHP
    }
    
    @RequestMapping("/register")
    int registerUser(UserProtos.User usr){
        //kalau berhasil add user ke repository akan mengembalikan retval = 1
        int retval = 0;
//        this.userRepository.
        return retval;
    }
}

