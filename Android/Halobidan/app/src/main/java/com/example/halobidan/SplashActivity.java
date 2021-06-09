package com.example.halobidan;

import android.content.Intent;
import android.os.Build;
import android.os.Bundle;
import android.os.Handler;

import androidx.appcompat.app.AppCompatActivity;

public class SplashActivity extends AppCompatActivity {

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        if (Build.VERSION.SDK_INT <= 22) {
            startActivity(new Intent(SplashActivity.this, MainActivity.class));
        }else {
            setContentView(R.layout.activity_splash);

            getSupportActionBar().hide();

            new Handler().postDelayed(new Runnable() {
                @Override
                public void run() {
//                Intent intent = new Intent(SplashActivity.this, MainActivity.class);
//                startActivity(intent);
//                finish();

                    PrefManager prefManager = new PrefManager(getApplicationContext());

                    startActivity(new Intent(SplashActivity.this, SlderActivity.class));
                    finish();
                }
            }, 2000);
        }
    }
}