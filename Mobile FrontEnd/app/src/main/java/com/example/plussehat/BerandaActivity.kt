package com.example.plussehat

import android.content.Intent
import androidx.appcompat.app.AppCompatActivity
import android.os.Bundle
import kotlinx.android.synthetic.main.activity_beranda.*
import kotlinx.android.synthetic.main.activity_login.*

class BerandaActivity : AppCompatActivity() {
    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        setContentView(R.layout.activity_beranda)

        btn_daftar.setOnClickListener{
            startActivity(Intent(this, PendaftaranActivity::class.java))
        }
    }
}