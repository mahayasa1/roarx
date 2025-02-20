<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
        <div class="container">
            <!-- Tentang Kami -->
            <div class="section">
                <h1>Tentang Kami</h1>
                <p>[Nama Website Anda] adalah platform yang bertujuan untuk [deskripsi singkat, misalnya: membantu pengguna memanfaatkan teknologi, menyediakan layanan pendidikan, atau menciptakan komunitas inovatif].</p>
                <p>Sejak berdiri pada [tahun], kami telah melayani ribuan pengguna dengan solusi terbaik dan terus berkembang untuk memberikan nilai tambah yang lebih besar.</p>
            </div>
    
            <!-- Visi, Misi, dan Nilai -->
            <div class="section">
                <h1>Visi & Misi</h1>
                <p><strong>Visi:</strong> Menjadi pemimpin dalam [industri Anda] dan menciptakan dampak positif di setiap aspek kehidupan.</p>
                <p><strong>Misi:</strong></p>
                <ul>
                    <li><i class="fas fa-check-circle"></i> Memberikan layanan terbaik yang sesuai dengan kebutuhan pengguna.</li>
                    <li><i class="fas fa-check-circle"></i> Mendorong inovasi dan kreativitas untuk menciptakan masa depan yang lebih baik.</li>
                    <li><i class="fas fa-check-circle"></i> Membangun komunitas yang inklusif, suportif, dan berkelanjutan.</li>
                </ul>
            </div>
            <br>
    
            <!-- Tim Kami -->
            <div class="section">
                <h1>Tim Kami</h1>
                <div class="team">
                    <div class="member">
                        <img class="w-24" src="{{ asset('asset/img/profile-picture.png') }}" alt="Tim Member">
                        <h4>Nama Tim 1</h4>
                        <p>CEO & Founder</p>
                    </div>
                    <div class="member">
                        <img class="w-24" src="{{ asset('asset/img/profile-picture.png') }}" alt="Tim Member">
                        <h4>Nama Tim 2</h4>
                        <p>CTO</p>
                    </div>
                    <div class="member">
                        <img class="w-24" src="{{ asset('asset/img/profile-picture.png') }}" alt="Tim Member">
                        <h4>Nama Tim 3</h4>
                        <p>Marketing Manager</p>
                    </div>
                </div>
            </div>
    <br>
            <!-- Hubungi Kami -->
            <div class="section">
                <h1>Hubungi Kami</h1>
                <p>Kami selalu terbuka untuk diskusi dan kolaborasi. Jangan ragu untuk menghubungi kami melalui:</p>
                <ul>
                    <li><i class="fas fa-envelope"></i> Email: <a href="https://mail.google.com/mail/u/0/?tab=wm#inbox" target="_blank" class="text-sky-700">mahayasa.udit@gmail.com</a></li>
                    <li><i class="fas fa-phone"></i> Telepon: <a href="tel:+62123456789" target="_blank" class="text-sky-700">+62 123-456-789</a></li>
                    <li><i class="fas fa-map-marker-alt"></i> Alamat: [Alamat Kantor Anda]</li>
                </ul>
            </div>
        </div>    
</x-layout>